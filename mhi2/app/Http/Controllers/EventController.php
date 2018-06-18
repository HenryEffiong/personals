<?php

namespace App\Http\Controllers;

use App\Eventcategory;
use Illuminate\Http\Request;
use App\Event;
use Session;
use Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('cms.event.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Eventcategory::all();
        return view('cms.event.create')->withCategories($categories);
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

        $event= new Event;

        $event->title= $request->input('title');
        $event->venue= $request->input('venue');
        $event->time= $request->input('time');
        $event->date= $request->input('date');
        $event->eventcategory_id= $request->input('eventcategory_id');
        //$event->category= $request->input('category');
        $event->description= $request->input('description');
        // $event->picture= $request->input('picture');
        $picture= $request->file('picture');
        $filename= time(). '.'.$picture->getClientOriginalExtension();
        $location= public_path('event/'.$filename);
        $location = 'event/'.$filename;
        Image::make($picture)->resize(380, 270)->save($location);
        $event->picture= $filename;


        $event->save();

        //$event->categories()->sync($request->categories, false);

        Session::flash('success', 'Event post successful!');

        return redirect()->route('cms/event.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event= Event::find($id);
        return view('cms.event.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Eventcategory::all();
        $event = Event::find($id);
        return view('cms.event.edit')->withEvent($event)->withCategories($categories);
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
        $event= Event::find($id);

        $event->title= $request->input('title');
        $event->venue= $request->input('venue');
        $event->time= $request->input('time');
        $event->date= $request->input('date');
        $event->eventcategory_id= $request->input('eventcategory_id');
        //$event->category= $request->input('category');
        $event->description= $request->input('description');
        // $event->picture= $request->input('picture');

        if($request->hasfile('picture')){
            $picture= $request->file('picture');
            $filename= time(). '.'.$picture->getClientOriginalExtension();
            $location= public_path('event/'.$filename);
            Image::make($picture)->resize(380, 270)->save($location);
            $event->picture= $filename;
        }



        $event->save();

//        $event->categories()->sync($request->categories);

        Session::flash('success', 'Event post successful!');

        return redirect()->route('cms/event.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        //$event->categories()->detach();
        $event->delete();
        return redirect()->route('cms/event');
    }
}
