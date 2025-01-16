<?php

namespace App\Http\Controllers;

use App\Models\BlogCategorie;
use App\Models\BlogLatestPost;
use App\Models\BogAdd;
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

class BlogPageController extends Controller
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
        $banner = OurBanner::first();
        $review = OurBannerImageCenter::all();
        $faq = FAQ::first();
        $faqAddList = FAQaddList::all();
        $latestPost = BlogLatestPost::orderBy('created_at','desc')->get();
        $blogAdd = BogAdd::orderBy('created_at', 'desc')->get();
        $category= BlogCategorie::all();
        return view('blog', compact([
            'homeTop','shortDesc','blogAdd','latestPost','category',
            'homeSlider',
            'sliderLeft',
            'sliderRight',
            
            'banner',
            'footerBanner',
            'review',

        ]));
    }
}
