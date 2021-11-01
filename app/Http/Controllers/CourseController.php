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
        // $data = $request->all();

        $data['slug'] = Str::slug($data['title'], '-');

        $file = Storage::put('public/images', $data['picture']);

        $data['picture'] = substr($file, 14);

        $data['user_id'] = auth()->user()->id;

        // dd($data);

        $course = Course::create($data);

        $course->categories()->attach($data['category_list']);

        return back();
    }

    public function delete($slug)
    {
        $course = Course::where('slug', '=', $slug)->firstOrFail();

        // dd($course);

        $course->delete();

        return back();
    }

    public function update(CourseUpdateRequest $request, $slug)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title'], '-');

        $course = Course::where('slug', '=', $slug)->firstOrFail();

        $data['id'] = $course->id;

        dd($data);

        // $course->update($data);

        // return back();
    }
}
