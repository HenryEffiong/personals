<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Image;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.pa
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = new Setting;
        $setting->volunteer_text = $request->input('volunteer_text');
        $setting->fundraise_text = $request->input('fundraise_text');
        $setting->donate_text = $request->input('donate_text');
        $setting->what_we_do1 = $request->input('what_we_do1');
        $setting->what_we_do2 = $request->input('what_we_do2');
        $setting->who_we_are = $request->input('who_we_are');
        $setting->tweetno = $request->input('tweetno');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->instagram = $request->input('instagram');
        $setting->linkedin = $request->input('linkedin');
        $setting->footernote = $request->input('footernote');
        $setting->vision = $request->input('vision');
        $setting->corporate_profile = $request->input('corporate_profile');
        $setting->vision = $request->input('vision');
        $setting->stafftext = $request->input('stafftext');
        $setting->boardtext = $request->input('boardtext');
        $setting->clinicvision = $request->input('clinicvision');
        $setting->contactwriteup = $request->input('contactwriteup');
        $setting->address = $request->input('address');
        $setting->generalemail = $request->input('generalemail');
        $setting->contactemail1 = $request->input('contactemail1');
        $setting->contactemail2 = $request->input('contactemail2');
        $setting->phone = $request->input('phone');
        $setting->contactboxtext = $request->input('contactboxtext');

        if($request->hasfile('picture_whoweare')){
            $picture_whoweare= $request->file('picture_whoweare');
            $filename= time(). '.'.$picture_whoweare->getClientOriginalExtension();
            $location= 'setting/'.$filename;
            Image::make($picture_whoweare)->save($location);
            $setting->picture_whoweare= $filename;
        }
        $setting->save();

        Session::flash('success', 'Settings Update successful!');

        return redirect()->route('cms/setting.show', $setting->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::find(1);
        return view('cms.setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('cms.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $setting = Setting::find($id);
        $setting->volunteer_text = $request->input('volunteer_text');
        $setting->fundraise_text = $request->input('fundraise_text');
        $setting->donate_text = $request->input('donate_text');
        $setting->what_we_do1 = $request->input('what_we_do1');
        $setting->what_we_do2 = $request->input('what_we_do2');
        $setting->who_we_are = $request->input('who_we_are');
        $setting->tweetno = $request->input('tweetno');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->instagram = $request->input('instagram');
        $setting->linkedin = $request->input('linkedin');
        $setting->footernote = $request->input('footernote');
        $setting->vision = $request->input('vision');
        $setting->corporate_profile = $request->input('corporate_profile');
        $setting->vision = $request->input('vision');
        $setting->stafftext = $request->input('stafftext');
        $setting->boardtext = $request->input('boardtext');
        $setting->clinicvision = $request->input('clinicvision');
        $setting->contactwriteup = $request->input('contactwriteup');
        $setting->address = $request->input('address');
        $setting->generalemail = $request->input('generalemail');
        $setting->contact_email1 = $request->input('contact_email1');
        $setting->contact_email2 = $request->input('contact_email2');
        $setting->phone = $request->input('phone');
        $setting->contactboxtext = $request->input('contactboxtext');

        if($request->hasfile('picture_whoweare')){
            $picture_whoweare= $request->file('picture_whoweare');
            $filename= time(). '.'.$picture_whoweare->getClientOriginalExtension();
           // $location= public_path('event/'.$filename);
            $location= 'setting/'.$filename;
            Image::make($picture_whoweare)->resize(380, 270)->save($location);
            $setting->picture_whoweare= $filename;
        }
        //$setting->picture_whoweare = $request->input('picture_whoweare');
        $setting->save();

        Session::flash('success', 'Settings Update successful!');

        return redirect()->route('cms/setting.show', $setting->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
