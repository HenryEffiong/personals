<?php

namespace App\Http\Controllers;

use App\Event;
use App\Gallery;
use App\Link;
use App\Member;
use App\State;
use Illuminate\Http\Request;
use App\Setting;

class PageController extends Controller
{
    public function getHome()
    {
        $members = Member::where('category', 'board')->get();
        $setting = Setting::find(1);
        return view('page.homepage', compact('members','setting'));
    }

    public function partnersncollaborators()
    {
        return view('page.resources.collaborators');
    }

    public function newsnpublication()
    {
        $lists = Link::where('listcategory_id', '9')->get();
        return view('page.resources.newsandpublication', compact('lists'));
    }

    public function media()
    {
        return view('page.resources.media');
    }

    public function healthupdates()
    {
        $lists = Link::where('listcategory_id', '10')->get();
        return view('page.resources.healthupdate', compact('lists'));
    }

    public function volunteer()
    {
        $states = State::all();
        return view('page.volunteer', compact('states'));
    }

    public function goals()
    {
        return view('page.clinicalcare.goals');
    }

    public function vision()
    {
        return view('page.clinicalcare.vision');
    }

    public function centres()
    {
        $states = State::all();
        return view('page.clinicalcare.centres', compact('states'));
    }

//    public function collaborationpartnership()
//    {
//        return view('page.community.collaborationpartnership');
//    }

//    public function manuscriptpublication()
//    {
//        $lists = Link::where('listcategory_id', 2)->get();
//        dd($lists);
//        return view('page.healthpolicyadvocacy.manuscriptpublication', compact('lists'));
//    }



    public function ourvision()
    {
        return view('page.about.vision');
    }

    public function ourvalues()
    {
        return view('page.about.value');
    }

    public function philosophies()
    {
        return view('page.about.philosophies');
    }

    public function mission()
    {
        return view('page.about.mission');
    }

    public function ourgoals()
    {
        return view('page.about.goals');
    }

    public function strategicplan()
    {
        return view('page.about.strategicplan');
    }

    public function staff()
    {
        $members = Member::where('category', 'staff')->get();
       // dd($members);
        return view('page.about.staff', compact('members'));
    }

    public function board()
    {
        $members = Member::where('category', 'board')->get();
        //dd($members);
        return view('page.about.board', compact('members'));
    }

    public function singlestaff($id)
    {
        $member= Member::find($id);
        return view('page.about.singlestaff', compact('member'));
    }

    public function singleboardmember($id)
    {
        $member= Member::find($id);
        return view('page.about.singleboardmember', compact('member'));
    }

    public function gallery()
    {
        //dd('hi');
        $galleries = Gallery::all();
        return view('page.gallery', compact('galleries'));
    }

    public function contact()
    {
        $setting = Setting::find(1);
        return view('page.contact',compact('setting'));
    }

    public function paymentsuccess()
    {
        return view('page.paymentsuccess');
    }

    public function about()
    {
        return view('page.about.corporateprofile');
    }

    public function program()
    {
        $events = Event::where('eventcategory_id', 3)->orderBy('date', 'desc')->get();
        return view('page.communityengagement.programs', compact('events'));
    }

    public function training()
    {
        $events = Event::where('eventcategory_id', 4)->orderBy('date', 'desc')->get();
        return view('page.communityengagement.training', compact('events'));
    }

    public function collaborationpartnership()
    {
        return view('page.communityengagement.collaborationpartnership');
    }

    public function phcsprogram()
    {

        $events = Event::where('eventcategory_id', 1)->orderBy('date', 'desc')->get();

        return view('page.preventivehealthcareservices.programs', compact('events'));
    }

    public function outreach()
    {
        $events = Event::where('eventcategory_id', 2)->orderBy('date', 'desc')->get();
        return view('page.preventivehealthcareservices.outreach', compact('events'));
    }

    public function services()
    {
        $lists = Link::where('listcategory_id', '8')->get();
        return view('page.preventivehealthcareservices.services', compact('lists'));
    }

    public function priorities()
    {
        $lists = Link::where('listcategory_id', '1')->get();
        return view('page.healthcareresearch.priorities', compact('lists'));
    }

    public function manuscriptandpublications()
    {
        $lists = Link::where('listcategory_id', '2')->get();
        return view('page.healthcareresearch.manuscriptandpublications', compact('lists'));
    }

    public function research()
    {
        $lists = Link::where('listcategory_id', '3')->get();
        return view('page.healthcareresearch.research', compact('lists'));
    }

    public function advocacypriorities()
    {
        $lists = Link::where('listcategory_id', '4')->get();
        return view('page.healthpolicyadvocacy.priorities', compact('lists'));
    }

    public function policy()
    {
        $lists = Link::where('listcategory_id', '5')->get();
        return view('page.healthpolicyadvocacy.policy', compact('lists'));
    }

    public function advocacy()
    {
        $lists = Link::where('listcategory_id', '7')->get();
        return view('page.healthpolicyadvocacy.advocacy', compact('lists'));
    }

    public function eventdetails($id)
    {
        $event= Event::find($id);
        return view('page.singleevent', compact('event'));
    }

    public function listdetails($id)
    {
        $list= Link::find($id);
        return view('page.singlelist', compact('list'));
    }

    public function donation()
    {
        return view('page.donation');
    }



    public function cms()
    {
        return view('cms.dashboard');
    }



}

