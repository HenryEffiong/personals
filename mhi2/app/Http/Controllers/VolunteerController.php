<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use Session;


class VolunteerController extends Controller
{
    public function savevolunteer(Request $request)
    {
        $volunteer = new Volunteer;
        $volunteer->firstname = $request->input('firstname');
        $volunteer->lastname = $request->input('lastname');
        $volunteer->gender = $request->input('gender');
        $volunteer->age = $request->input('age');
        $volunteer->phone = $request->input('phone');
        $volunteer->email = $request->input('email');
        $volunteer->country = $request->input('country');
        $volunteer->state = $request->input('state');
        $volunteer->city = $request->input('city');
        $volunteer->career = $request->input('career');
        $volunteer->interest = $request->input('interest');
        $volunteer->save();
        //$volunteer->firstname = $request->input('firstname');

        Session::flash('success', 'Your form has been submitted. Thank you!');

        return redirect()->route('volunteer');
    }

    public function index()
    {
        $volunteers = Volunteer::all();
        return view('cms.volunteer.index', compact('volunteers'));
    }
}
