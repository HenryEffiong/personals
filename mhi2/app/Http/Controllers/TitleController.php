<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use Session;


class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::all();
        return view('cms/title.index')->withCategories($titles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms/title.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' =>'required',

        ));
        $title = new Title;
        $title->name = $request->input('name');
        $title->save();
        Session::flash('success', 'Title added successfully!');

        return redirect()->route('cms/title.show', $title->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title= Title::find($id);
        return view('cms/title.show')->withTitle($title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Title::find($id);
        return view('cms/title.edit')->withTitle($title);
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
        $title = Title::find($id);
        $title->name = $request->input('name');
        $title->save();
        Session::flash('success', 'Title edited successfully!');

        return redirect()->route('cms/title.show', $title->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = Title::find($id);
        //$title->categories()->detach();
        $title->delete();
        return redirect()->route('cms/title');
    }
}
