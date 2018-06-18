<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Gallery;
use Session;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('cms.gallery.index')->withGalleries($galleries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view('cms.gallery.create')->withEvents($events);
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
            'picture' =>'required',

             ));

        $gallery= new Gallery;


        $gallery->event_id= $request->input('event_id');

        $picture= $request->file('picture');
        $filename= time(). '.'.$picture->getClientOriginalExtension();
        $location= public_path('gallery/'.$filename);
        Image::make($picture)->save($location);
        $gallery->picture= $filename;



//
//        $picture= $request->file('picture');
//        $filename= time(). '.'.$picture->getClientOriginalExtension();
//        $location= public_path('gallery/'.$filename);
//
//        Image::make($picture)->resize(380, 270)->save($location);
//        $gallery->picture= $filename;


        $gallery->save();

        //$gallery->categories()->sync($request->categories, false);

        Session::flash('success', 'Gallery post successful!');

        return redirect()->route('cms/gallery.show', $gallery->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery= Gallery::find($id);
        return view('cms.gallery.show')->withGallery($gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::all();
        $gallery = Gallery::find($id);
        return view('cms.gallery.edit')->withGallery($gallery)->withEvents($events);
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
        $gallery= Gallery::find($id);
        $gallery->event_id= $request->input('event_id');
        //$gallery->category= $request->input('category');
         $gallery->save();


        if($request->hasfile('picture')){
            $picture= $request->file('picture');
            $filename= time(). '.'.$picture->getClientOriginalExtension();
            $location= public_path('gallery/'.$filename);
            Image::make($picture)->save($location);
            $gallery->picture= $filename;
        }
        $gallery->save();


        Session::flash('success', 'Gallery post successful!');

        return redirect()->route('cms/gallery.show', $gallery->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        //$gallery->categories()->detach();
        $gallery->delete();
        return redirect()->route('cms/gallery');
    }
}
