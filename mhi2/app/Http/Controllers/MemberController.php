<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Title;
use Session;
use Image;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('cms.member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles = Title::all();
        return view('cms.member.create', compact('titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $this->validate($request, array(
            'title' =>'required'

             ));

        $member = new Member;

        $member->title= $request->input('title');
        $member->name= $request->input('name');
        $member->category= $request->input('category');
        $member->profile= $request->input('profile');
        $member->shortprofile= $request->input('shortprofile');
        $member->centre_id= $request->input('centre_id');
        //$member->category= $request->input('category');

        // $member->picture= $request->input('picture');
        if($request->hasfile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $location = public_path('member/' . $filename);
            Image::make($picture)->resize(533, 800)->save($location);
            $member->picture = $filename;
        }

        if($request->hasfile('picture2')) {
            $picture2 = $request->file('picture2');
            $filename = time() . '.' . $picture2->getClientOriginalExtension();
            $location = public_path('member2/' . $filename);
            Image::make($picture2)->resize(400, 400)->save($location);
            $member->picture2 = $filename;
        }


        $member->save();
        $member->titles()->sync($request->titles, false);

        Session::flash('success', 'Member post successful!');

        return redirect()->route('cms/member.show', $member->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member= Member::find($id);
        return view('cms.member.show')->withMember($member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$categories = Membercategory::all();
        $member = Member::find($id);
        return view('cms.member.edit')->withMember($member);
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
        $member = Member::find($id);
        $member->title= $request->input('title');
        $member->name= $request->input('name');
        $member->category= $request->input('category');
        $member->profile= $request->input('profile');
        $member->shortprofile= $request->input('shortprofile');
        $member->centre_id= $request->input('centre_id');
        //$member->category= $request->input('category');

        // $member->picture= $request->input('picture');
        if($request->hasfile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $location = public_path('member/' . $filename);
            Image::make($picture)->resize(533, 800)->save($location);
            $member->picture = $filename;
        }

        if($request->hasfile('picture2')) {
            $picture2 = $request->file('picture2');
            $filename = time() . '.' . $picture2->getClientOriginalExtension();
            $location = public_path('member2/' . $filename);
            Image::make($picture2)->resize(400, 400)->save($location);
            $member->picture2 = $filename;
        }

        $member->save();
        $member->titles()->sync($request->titles, false);

        Session::flash('success', 'Member post successful!');

        return redirect()->route('cms/member.show', $member->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->titles()->detach();
        $member->delete();
        return redirect()->route('cms/member');
    }
}
