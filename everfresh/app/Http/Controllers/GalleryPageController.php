<?php

namespace App\Http\Controllers;

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
use App\Models\SliderLeft;
use App\Models\SliderRight;
use App\Models\TeamMembers;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
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
        $homeAboutLeft = HomeAboutLeftItem::orderBy('id', 'desc')->take(4)->get();
        // $homeAboutLeft = HomeAboutLeftItem::all();
        $homeOurProjectList = OurProjectFlooring::all();
        $ourFlooring = OurProjectFlooring::where('projectType', 'flooring')->get();
        $ourCommerical = OurProjectFlooring::where('projectType', 'commercial')->get();
        $ourExterior = OurProjectFlooring::where('projectType', 'exterior')->get();
        $ourStreaming = OurProjectFlooring::where('projectType', 'streaming')->get();
        $ourOther = OurProjectFlooring::where('projectType', 'other')->get();

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
        return view('gallery', compact([
            'homeTop','shortDesc',
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
}
