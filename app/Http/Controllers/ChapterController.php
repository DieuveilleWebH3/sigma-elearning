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
    public function store(ChapterStoreRequest $request, $postSlug)
    {

        $data = $request->validated();

        $course = Course::where('slug', '=', $postSlug)->firstOrFail();

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
}
