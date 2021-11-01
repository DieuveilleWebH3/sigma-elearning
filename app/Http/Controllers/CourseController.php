<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Category;
use App\Models\Level;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class CourseController extends Controller
{
    //
    public function index()
    {

        return view('course.list');

    }

    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $levels = Level::orderBy('id', 'ASC')->get();
        $courses = Course::orderBy('id', 'ASC')->get();
        return view('course.courses', compact(['courses', 'categories', 'levels']));
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

        return view('course.update', compact(['course', 'categories', 'levels']));

    }

    public function update(CourseUpdateRequest $request, $slug)
    {
        $data = $request->validated();

        $course = Course::where('slug', '=', $slug)->firstOrFail();

        $data['slug'] = Str::slug($data['title'], '-');

        $data['id'] = $course->id;

        // $data['user_id'] = auth()->user()->id;

        $data['user_id'] = $course->user_id;

        dd($data);

        try
        {
            if ($data['picture'] !== '')
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
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }


        // $course->update($data);

        // $course->categories()->detach();

        // $course->categories()->attach($data['category_list']);

        // return back();
    }
}
