<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Category;
use App\Models\Level;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use PHPUnit\Exception;

use Illuminate\Pagination\CursorPaginator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Http\Requests\UserProfileUpdateRequest;
use App\Http\Requests\UserPasswordChangeRequest;

use Illuminate\Validation\Rules;

class CourseController extends Controller
{
    //
    public function profile()
    {
        $user = User::find(auth()->user()->id);

        $user_email = Crypt::encryptString($user->email);

        if($user->getUserType() === 'Admin') {

            return view('course.profile', compact(['user', 'user_email']));

        }

        return view('course.profile_instructor', compact(['user', 'user_email']));

    }

    public function profile_update(UserProfileUpdateRequest $request, $email)
    {
        // $user = User::find(auth()->user()->id);
        // Hash::check( $data->password , $email)
        $user = User::where('email', '=', Crypt::decryptString($email))->firstOrFail();

        $data = $request->validated();

        // if ($user->picture && $user->picture !== "")

        $my_key_check = 'picture';

        if (array_key_exists($my_key_check, $data))
        {
            if (Storage::exists("public/images/$user->picture"))
            {
                Storage::delete("public/images/$user->picture");
            }

            $file = Storage::put('public/images', $data['picture']);

            $data['picture'] = substr($file, 14);
        }
        else
        {
            $data['picture'] = $user->picture;
        }

        // dd([$user, $data]);

        $user->update($data);

        session()->flash(
            'feedback', 'Your profile was successfully updated.'
        );

        return redirect()->route('profile')
            ->with('message', 'Your profile was successfully updated !');

    }

    public function password_change(UserPasswordChangeRequest $request, $email)
    {
        $user = User::where('email', '=', Crypt::decryptString($email))->firstOrFail();

        $user_password = $user->password;

        $data = $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'same:password_confirmation', Rules\Password::defaults()],
            'password_confirmation' => ['required', Rules\Password::defaults()],
            ]);

        if (!Hash::check($data['current_password'], $user_password)) {
            return back()->withErrors(['current_password'=>'password does not match']);
        }

        $user->password = Hash::make($data['password']);

        $user->save();

        session()->flash(
            'feedback', 'Your password was successfully updated.'
        );

        return redirect()->route('profile')
            ->with('success','Your password was successfully updated ! ')
            ->with('message', 'Your password was successfully updated !');
    }


    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $levels = Level::orderBy('id', 'ASC')->get();

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin') {

            $courses = Course::orderBy('id', 'ASC')->get();

            return view('course.courses', compact(['courses', 'categories', 'levels']));

        }

        $courses = Course::where('user_id', '=', $user->id)->paginate(4);

        return view('course.instructor_course', compact(['courses', 'categories', 'levels']));
    }

    public function detail($slug)
    {
        //
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin') {
            return view('course.detail', compact('course'));
        }

        return view('course.instructor_detail', compact('course'));

    }

    public function store(CourseStoreRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title'], '-');

        $file = Storage::put('public/images', $data['picture']);

        $data['picture'] = substr($file, 14);

        $data['user_id'] = auth()->user()->id;

        $course = Course::create($data);

        $course->categories()->attach($data['category_list']);

        return back();
    }

    public function delete($slug)
    {
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        $course->delete();

        return back();
    }

    public function showUpdate($slug)
    {
        //
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        $categories = Category::all();

        $levels = Level::orderBy('id', 'ASC')->get();

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin') {

            return view('course.update', compact(['course', 'categories', 'levels']));

        }

        return view('course.instructor_detail', compact(['course', 'categories', 'levels']));

    }

    public function update(CourseUpdateRequest $request, $slug)
    {
        $data = $request->validated();

        $course = Course::where('slug', '=', $slug)->firstOrFail();

        $data['slug'] = Str::slug($data['title'], '-');

        $data['id'] = $course->id;

        $data['user_id'] = $course->user_id;

        $my_key = 'picture';

        if (array_key_exists($my_key, $data))
        {
            if (Storage::exists("public/images/$course->picture"))
            {
                Storage::delete("public/images/$course->picture");
            }

            $file = Storage::put('public/images', $data['picture']);

            $data['picture'] = substr($file, 14);
        }
        else
        {
            $data['picture'] = $course->picture;
        }

        $course->update($data);

        $course->categories()->detach();

        $course->categories()->attach($data['category_list']);

        return redirect()->route('courses');
    }


    public function visitor()
    {
        if (\Illuminate\Support\Facades\Auth::check()){
            return redirect()->route('courses');
        }

        // $courses = Course::orderBy('created_at', 'DESC')->paginate(12)->get(); //->get();
        $courses = Course::paginate(9);

        $categories = Category::orderBy('id', 'ASC')->get();
        $levels = Level::orderBy('id', 'ASC')->get();
        // $courses = Course::orderBy('id', 'ASC')->get();

        return view('course.visitor_course', compact(['courses', 'categories', 'levels']));
    }

    public function detailVisitor($slug)
    {
        //
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        return view('course.visitor_detail', compact('course'));

    }
}
