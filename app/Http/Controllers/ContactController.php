<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //

    public function contact()
    {
        return view('course.contact');
    }

    public function send(Request $request)
    {
        $datas = $request->all();

        // dd($data);

        Mail::to('administrator@test.com')->send(new ContactMail($datas));

        if (Auth::check()){
            return redirect()->route('courses')
                ->with('success','Your message was successfully sent ! ')
                ->with('message', 'Your message was successfully sent !');
        }

        return redirect()->route('courseVisitor')
            ->with('success','Your message was successfully sent ! ')
            ->with('message', 'Your message was successfully sent !');
    }
}
