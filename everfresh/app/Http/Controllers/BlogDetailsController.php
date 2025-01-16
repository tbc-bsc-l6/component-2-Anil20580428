<?php

namespace App\Http\Controllers;

use App\Models\BlogAuthor;
use App\Models\BlogCategorie;
use App\Models\BlogLatestPost;
use App\Models\BogAdd;
use App\Models\FooterShortDesc;
use App\Models\Hometop;
use App\Models\OurBannerFooter;
use App\Models\TextWidget;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function showDeatils($id)
    {
        $textWidget = TextWidget::first();
        $homeTop = Hometop::first();
        $footerBanner = OurBannerFooter::first();
        $shortDesc = FooterShortDesc::first();
        $latestPost = BlogLatestPost::orderBy('created_at', 'desc')->get();
        $category = BlogCategorie::all();
        $blogDetails = BogAdd::find($id);
        $blogAuthor = BlogAuthor::first();

        return view('blogDetail', compact('textWidget','homeTop', 'footerBanner', 'shortDesc', 'blogDetails','category','latestPost','blogAuthor'));
    }
}
