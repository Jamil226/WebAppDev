<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'contact' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]
        );

        $contactModel = new ContactModel();
        $contactModel->name = $request->name;
        $contactModel->email = $request->email;
        $contactModel->contact = $request->contact;
        $contactModel->subject = $request->subject;
        $contactModel->message = $request->message;
        $contactModel->ip = $request->ip();
        $contactModel->save();
        return back()->withSuccess('Thanks for Contacting Us. We\'ll Contact You ASAP!');



    }

    // public function submitFaqRecord(Request $request)
    // {


    //     $faqs->save();
    //     return back()->withSuccess('FAQ Record Added Successfully');
    // }
}
