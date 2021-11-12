<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests\ChapterStoreRequest;
use App\Http\Requests\ChapterUpdateRequest;

use App\Models\Course;
use App\Models\Chapter;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use PHPUnit\Exception;

use Illuminate\Pagination\CursorPaginator;

class ChapterController extends Controller
{
    //
    public function index()
    {

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            $chapters = Chapter::orderBy('created_at', 'DESC')->get();

            return view('chapter.list', compact('chapters'));
        }

        $courses = Course::where('user_id', '=', $user->id)->get();

        $course_ids = [];

        foreach ($courses as $course) {
            $course_ids[] = $course->id;
        }

        $chapters = Chapter::whereIn('course', $course_ids)->get();

        // dd([$courses, $course_ids, $chapters]);

        return view('chapter.instructor_list', compact('chapters'));
    }

    public function store(ChapterStoreRequest $request, $courseSlug)
    {
        $user = User::find(auth()->user()->id);

        $data = $request->validated();

        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();

        $data['slug'] = Str::slug($data['title'], '-');

        $my_key = 'video';

        if (array_key_exists($my_key, $data))
        {
            $file = Storage::put('public/videos', $data['video']);

            $data['video'] = substr($file, 14);
        }

        $data['course'] = $course->id;

        // dd($data);

        Chapter::create($data);

        return back()
            ->with('success','Your chapter was successfully created ! ')
            ->with('message', 'Your chapter was successfully created !');
    }

    public function detail($courseSlug, $chapterSlug)
    {
        $user = User::find(auth()->user()->id);

        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        return view('chapter.detail', compact(['course', 'chapter']));
    }

    public function showUpdate($courseSlug, $chapterSlug)
    {
        //
        $user = User::find(auth()->user()->id);

        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        if($user->getUserType() === 'Admin'){

            return view('chapter.update', compact(['course', 'chapter']));
        }

        return view('chapter.instructor_detail', compact(['course', 'chapter']));
    }

    public function update(ChapterUpdateRequest $request, $courseSlug, $chapterSlug)
    {
        $data = $request->validated();

        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        $data['slug'] = Str::slug($data['title'], '-');

        $data['id'] = $chapter->id;

        $data['course'] = $course->id;

        $my_key = 'video';

        if (array_key_exists($my_key, $data))
        {
            if (Storage::exists("public/videos/$chapter->video"))
            {
                Storage::delete("public/videos/$chapter->video");
            }

            $file = Storage::put('public/videos', $data['video']);

            $data['video'] = substr($file, 14);
        }
        else if ($chapter->video)
        {
            $data['video'] = $chapter->video;
        }

        // dd($data);

        $chapter->update($data);

        $user = User::find(auth()->user()->id);

        if($user->getUserType() === 'Admin'){

            return redirect()->route('courseDetail', $course->slug)
                ->with('success','Your chapter was successfully updated ! ')
                ->with('message', 'Your chapter was successfully updated !');
        }

        return redirect()->route('courseShowUpdate', $course->slug)
            ->with('success','Your chapter was successfully updated ! ')
            ->with('message', 'Your chapter was successfully updated !');

    }

    public function delete($courseSlug, $chapterSlug)
    {
        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        // dd([$chapter, $course]);

        $chapter->delete();

        return back()
            ->with('success','Your chapter was successfully deleted ! ')
            ->with('message', 'Your chapter was successfully deleted !');

    }
}
