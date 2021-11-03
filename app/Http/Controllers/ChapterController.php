<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChapterStoreRequest;
use App\Http\Requests\ChapterUpdateRequest;

use App\Models\Course;
use App\Models\Chapter;

class ChapterController extends Controller
{
    //
    public function store(ChapterStoreRequest $request, $postSlug)
    {

        $data = $request->validated();

        $course = Course::where('slug', '=', $postSlug)->firstOrFail();

        $data['course'] = $course->id;

        dd($data);

        Chapter::create($data);
        
        return back();
    }
}
