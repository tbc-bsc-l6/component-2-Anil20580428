<?php

namespace App\Http\Controllers;

use App\Models\FooterShortDesc;
use App\Models\Hometop;
use App\Models\OurBannerFooter;
use App\Models\OurProject;
use App\Models\OurProjectFlooring;
use Illuminate\Http\Request;

class ProjectDeatilController extends Controller
{
    public function index()
    {
        $shortDesc = FooterShortDesc::first();
        $homeTop = Hometop::first();
        $footerBanner = OurBannerFooter::first();

        return view('projectDetail', compact('homeTop', 'footerBanner','shortDesc'));
    }
    public function showDetails($id)
    {
        // $projectDetail = 
        $shortDesc = FooterShortDesc::first();
        $homeTop = Hometop::first();
        $footerBanner = OurBannerFooter::first();

        $showDetails = OurProjectFlooring::find($id);
        return view('projectDetail', compact('homeTop', 'footerBanner','showDetails','shortDesc',));
    }
}
