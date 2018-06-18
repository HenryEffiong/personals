<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Listcategory;


class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Link::all();
        return view('cms.list.index')->withLinks($lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Listcategory::all();
        return view('cms.list.create')->withCategories($categories);
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
            'title' =>'required',

            'description'=>'required' ));

        $list= new Link;

        $list->title= $request->input('title');
        $list->venue= $request->input('venue');
        $list->time= $request->input('time');
        $list->date= $request->input('date');
        $list->listcategory_id= $request->input('listcategory_id');
        //$list->category= $request->input('category');
        $list->description= $request->input('description');
        // $list->picture= $request->input('picture');
        $picture= $request->file('picture');
        $filename= time(). '.'.$picture->getClientOriginalExtension();
        $location= public_path('list/'.$filename);
        Image::make($picture)->resize(380, 270)->save($location);
        $list->picture= $filename;


        $list->save();

        //$list->categories()->sync($request->categories, false);

        Session::flash('success', 'Link post successful!');

        return redirect()->route('cms/list.show', $list->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list= Link::find($id);
        return view('cms.list.show')->withLink($list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Listcategory::all();
        $list = Link::find($id);
        return view('cms.list.edit')->withLink($list)->withCategories($categories);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Link::find($id);
        //$list->categories()->detach();
        $list->delete();
        return redirect()->route('cms/list');
    }
}
