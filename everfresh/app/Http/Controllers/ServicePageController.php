<?php

namespace App\Http\Controllers;

use App\Models\AwesomeService;
use App\Models\AwesomeServiceTitle;
use App\Models\ClintServiceUpdate;
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
use App\Models\WhyChoooseUs;

class ServicePageController extends Controller
{
    public function index()
    {
        $shortDesc = FooterShortDesc::first();
        $whyDescription = WhyChoooseUs::first();
        $clintServiceUpdate = ClintServiceUpdate::first();
        $awesomeServiceTitle = AwesomeServiceTitle::first();
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

        $serviceLeft = AwesomeService::latest()->take(3)->get();
        $serviceRight = AwesomeService::latest()->take(3)->get();

        // our awesome service 
        // $awesomeService = 
        return view('service', compact([
            'homeTop','serviceLeft','serviceRight','awesomeServiceTitle','clintServiceUpdate','whyDescription',
            'homeSlider','shortDesc',
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
