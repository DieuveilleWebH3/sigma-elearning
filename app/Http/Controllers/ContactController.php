<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function contact()
    {
        return view('course.contact');
    }

    public function send(Request $request)
    {
        $data = $request->all();

        dd($data);
        
        return redirect()->route('courseVisitor');
    }
}
