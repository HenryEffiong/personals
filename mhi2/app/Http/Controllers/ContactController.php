<?php

namespace App\Http\Controllers;
use App\Contact;
use Session;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function savecontact(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        //$contact->name = $request->input('name');
        $contact->save();


//        $to = "ogbumamichael@gmail.com";
//        $subject = $request->input('subject');
//        $txt = $request->input('message');
//        $headers = "From: webmaster@mhi.org.ng" . "\r\n" .
//            "CC: somebodyelse@example.com";
//
//        mail($to,$subject,$txt,$headers);

        Session::flash('success', 'Your message has been sent. Thank you!');

        return redirect()->route('contact');

    }

    public function index()
    {
        $messages = Contact::all();
        return view('cms.contact.index', compact('messages'));
    }
}
