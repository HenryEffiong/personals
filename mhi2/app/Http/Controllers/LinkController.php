<?php
//I used the model link instead of list becuase using linst was giving errors, I suppose it was clashing with some default laravel function
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Listcategory;
use Session;


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
        return view('cms.link.index')->withLists($lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Listcategory::all();
        return view('cms.link.create')->withCategories($categories);
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

            ));

        $list= new Link;

        $list->title= $request->input('title');
        $list->link= $request->input('link');

        $list->listcategory_id= $request->input('listcategory_id');

        $list->description= $request->input('description');

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
        return view('cms.link.show')->withList($list);
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
        return view('cms.link.edit')->withList($list)->withCategories($categories);
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
        $list= Link::find($id);

        $list->title= $request->input('title');
        $list->link= $request->input('link');

        $list->listcategory_id= $request->input('listcategory_id');

        $list->description= $request->input('description');

        $list->save();

        //$list->categories()->sync($request->categories, false);

        Session::flash('success', 'List edit successful!');

        return redirect()->route('cms/list.show', $list->id);

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
