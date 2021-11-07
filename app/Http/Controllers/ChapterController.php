<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChapterStoreRequest;
use App\Http\Requests\ChapterUpdateRequest;

use App\Models\Course;
use App\Models\Chapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ChapterController extends Controller
{
    //
    public function index()
    {
        $chapters = Chapter::orderBy('created_at', 'DESC')->get();

        return view('chapter.list', compact('chapters'));

    }

    public function store(ChapterStoreRequest $request, $courseSlug)
    {

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

        return back();
    }

    public function detail($courseSlug, $chapterSlug)
    {
        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        // dd([$chapter, $course]);

        // $chapter->delete();

        return view('chapter.detail', compact(['course', 'chapter']));

    }

    public function showUpdate($courseSlug, $chapterSlug)
    {
        //
        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        return view('chapter.update', compact(['course', 'chapter']));

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

        return redirect()->route('courseDetail', $course->slug);
    }

    public function delete($courseSlug, $chapterSlug)
    {
        $course = Course::where('slug', '=', $courseSlug)->firstOrFail();
        $chapter = Chapter::where('slug', '=', $chapterSlug)
            ->where('course', '=', $course->id)
            ->firstOrFail();

        // dd([$chapter, $course]);

        $chapter->delete();

        return back();

    }
}
