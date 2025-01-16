<?php

namespace App\Http\Controllers;

use App\Models\About_2;
use App\Models\FAQ;
use App\Models\FAQaddList;
use App\Models\FooterShortDesc;
use App\Models\HomeAbout;
use App\Models\HomeAboutLeftItem;
use App\Models\Homeslider;
use App\Models\Hometop;
use App\Models\MeetOurTeam;
use App\Models\OurBanner;
use App\Models\OurBannerFooter;
use App\Models\OurBannerImageCenter;
use App\Models\OurBestPlan;
use App\Models\OurPlanToure;
use App\Models\OurProject;
use App\Models\OurProjectFlooring;
use App\Models\ServiceBook;
use App\Models\SliderLeft;
use App\Models\SliderRight;
use App\Models\TeamMembers;
use Illuminate\Http\Request;

class AbouPageController extends Controller
{
    public function index()
    {
        $shortDesc = FooterShortDesc::first();
        $homeTop = Hometop::first();
        $footerBanner = OurBannerFooter::first();
        $homeSlider = Homeslider::all();
        $sliderLeft = SliderLeft::first();
        $sliderRight = SliderRight::first();
        $homeAbout = HomeAbout::first();
        $homeOurProject = OurProject::first();
        $homeAboutLeft = HomeAboutLeftItem::orderBy('id', 'desc')->get();
        // $homeAboutLeft = HomeAboutLeftItem::all();
        $about2 = About_2::first();
        $homeOurProjectList = OurProjectFlooring::all();

        $ourFlooring = $homeOurProjectList->where('projectType', 'flooring');
        $ourCommerical = $homeOurProjectList->where('projectType', 'commercial');
        $ourExterior = $homeOurProjectList->where('projectType', 'exterior');
        $ourStreaming = $homeOurProjectList->where('projectType', 'streaming');
        $ourOther = $homeOurProjectList->where('projectType', 'other');
        $banner = OurBanner::first();
        $review = OurBannerImageCenter::all();

        $meetOurteam = MeetOurTeam::first();
        $teamMember = TeamMembers::all();
        $ourBestPlan = OurBestPlan::first();
        $ourBestPlanToure = OurPlanToure::latest()->take(4)->get();
        $faq = FAQ::first();
        $faqAddList = FAQaddList::all();

        // our awesome service 
        // $awesomeService = 
        return view('about', compact([
            'homeTop','about2','shortDesc',
            'homeSlider',
            'sliderLeft',
            'sliderRight',
            'homeAbout',
            'homeAboutLeft',
            'homeOurProject',
            'homeOurProjectList',
            'ourFlooring',
            'ourCommerical',
            'ourExterior',
            'ourStreaming',
            'ourOther',
            'banner',
            'footerBanner',
            'review',
            'meetOurteam',
            'teamMember',
            'ourBestPlan',
            'ourBestPlanToure',
            'faq',
            'faqAddList'
        ]));
    }

    // Store service booking data
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'ser_name' => 'required|string|max:255',
            'ser_email' => 'required|email|max:255',
            'ser_phone' => 'required|string|max:20',
            'ser_post' => 'required|string|max:10',
            'ser_adds' => 'required|string|max:255',
            'ser_city' => 'required|string|max:255',
            'ser_option' => 'required|string|max:255',
            'ser_comment' => 'nullable|string|max:500',
        ]);

        // Create a new service booking record
        ServiceBook::create([
            'name' => $request->input('ser_name'),
            'email' => $request->input('ser_email'),
            'phone' => $request->input('ser_phone'),
            'postcode' => $request->input('ser_post'),
            'address' => $request->input('ser_adds'),
            'city' => $request->input('ser_city'),
            'choose' => $request->input('ser_option'),
            'comment' => $request->input('ser_comment'),
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Your service booking has been successfully submitted.');
    }
}
