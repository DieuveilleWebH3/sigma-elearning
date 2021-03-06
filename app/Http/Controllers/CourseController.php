<?php

namespace App\Http\Controllers;

use App\Models\InstructorRequest;
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

use Illuminate\Support\Facades\Password;


class CourseController extends Controller
{
    //
    public function generate_user(Request $request)
    {
        $datas = $request->all();

        /*
        $instructor_request = InstructorRequest::where([
            ['email', '=', $datas['email']],
            ['firstname', '=', $datas['firstname']],
            ['lastname', '=', $datas['lastname']],
        ])->firstOrFail();
        */

        $instructor_request = InstructorRequest::where([
            ['email', '=', $datas['email']],
            ['firstname', '=', $datas['firstname']],
            ['lastname', '=', $datas['lastname']],
        ])->get();

        if(count($instructor_request) > 0)
        {
            foreach ($instructor_request as $instructor)
            {
                $instructor -> authorization = 1;

                $instructor->save();
            }
        }
        else
        {
            $instructor_request -> authorization = 1;

            $instructor_request->save();
        }

        // dd([$datas, $instructor_request]);

        User::create([
            'firstname' => $datas['firstname'],
            'lastname' => $datas['lastname'],
            'email' => $datas['email'],
            'password' => Hash::make('12345678'),
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
                ->withErrors(['email' => __($status)]);

    }

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
        $user = User::where('email', '=', Crypt::decryptString($email))->firstOrFail();

        $data = $request->validated();

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
            ->with('success', 'Your profile was successfully updated !');

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

    public function user_management()
    {
        if(! (\Illuminate\Support\Facades\Auth::check()))
        {
            return redirect()->route('courseVisitor');
        }

        $user = User::find(auth()->user()->id);

        if(! ($user->getUserType() === 'Admin'))
        {
            return redirect()->route('courses');
        }

        $users = User::where('usertype', '=', 2)->get();

        return view('course.user_management', compact(['users',]));
    }

    public function instructor_requests_management()
    {
        if(! (\Illuminate\Support\Facades\Auth::check()))
        {
            return redirect()->route('courseVisitor');
        }

        $user = User::find(auth()->user()->id);

        if(! ($user->getUserType() === 'Admin'))
        {
            return redirect()->route('courses');
        }

        $requests = InstructorRequest::orderBy('id', 'ASC')->get();

        return view('course.instructor_request', compact(['requests',]));
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

        return back()
            ->with('success','Your course was successfully created ! ')
            ->with('message', 'Your course was successfully created !');
    }

    public function delete($slug)
    {
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        foreach ($course->chapters as $chapter){
            $chapter->delete();
        }

        if(Storage::exists("public/images/$course->picture")){
            Storage::delete("public/images/$course->picture");
        }

        if (count($course->categories) > 0) {
            $course->categories->detach();
        }

        $course->delete();

        return back()
            ->with('success','Your course was successfully deleted ! ')
            ->with('message', 'Your course was successfully deleted !');
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

        return redirect()->route('courses')
            ->with('success','Your course was successfully updated ! ')
            ->with('message', 'Your course was successfully updated !');
    }


    public function visitor()
    {
        if (\Illuminate\Support\Facades\Auth::check()){
            return redirect()->route('courses');
        }

        $courses = Course::paginate(9);

        $categories = Category::orderBy('id', 'ASC')->get();
        $levels = Level::orderBy('id', 'ASC')->get();

        return view('course.visitor_course', compact(['courses', 'categories', 'levels']));
    }

    public function detailVisitor($slug)
    {
        //
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        return view('course.visitor_detail', compact('course'));

    }
}
