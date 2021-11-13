<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;

use App\Models\InstructorRequest;

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

        // dd($datas);

        if($datas['subject'] === "Request New Instructor")
        {
            InstructorRequest::create([
                'firstname' => $datas['firstname'],
                'lastname' => $datas['lastname'],
                'email' => $datas['email'],
            ]);
        }
        elseif ( array_key_exists('be_instructor', $datas))
        {
            if ($datas['be_instructor'] === "Yes"){
                InstructorRequest::create([
                    'firstname' => $datas['firstname'],
                    'lastname' => $datas['lastname'],
                    'email' => $datas['email'],
                ]);
            }

        }

        // dd($datas);

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
