<?php

use App\Http\Controllers\AbouPageController;
use App\Http\Controllers\AddBlogController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AwesomeServiceController;
use App\Http\Controllers\BlogAuthorController;
use App\Http\Controllers\BlogCategorieController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\BlogEditController;
use App\Http\Controllers\BlogLatestPostController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\BogAddController;
use App\Http\Controllers\CallActionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyDescriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FooterLongDesController;
use App\Http\Controllers\FooterShortDescController;
use App\Http\Controllers\GalleryPageController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MeetOurTeamController;
use App\Http\Controllers\OurAwesomeServiceController;
use App\Http\Controllers\OurBannerController;
use App\Http\Controllers\OurPlansController;
use App\Http\Controllers\OurProjectController;
use App\Http\Controllers\ProjectDeatilController;
use App\Http\Controllers\ServiceBookController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\SliderButtonController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TextWidgetController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\WhyChoooseUsController;
use App\Models\BlogAuthor;
use App\Models\BlogLatestPost;
use App\Models\ContactInfo;
use App\Models\OurProjectFlooring;
use App\Models\ServiceBook;
use Illuminate\Support\Facades\Route;


Route::get('login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Login and authentication routes
Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protect routes with 'auth' middleware
Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/homepage', [HomeController::class, 'index'])->name('admin.homepage');
    Route::post('homepage/slider/add', [HomeController::class, 'store'])->name('homepage.slider.add');
    Route::put('homepage/slider/edit/{id}', [HomeController::class, 'sliderEdit'])->name('homepage.slider.edit');
    Route::delete('homepage/slider/delete/{id}', [HomeController::class, 'sliderDelete'])->name('homepage.slider.delete');
    Route::get('admin/homepage/slider/button', [SliderButtonController::class, 'index'])->name('slider.button');
    Route::put('sliderLeft/update', [SliderButtonController::class, 'leftUpdate'])->name('sliderLeft.update');
    Route::put('sliderRight/update', [SliderButtonController::class, 'rightUpdate'])->name('sliderRight.update');
    Route::get('home/homeabout', [HomeAboutController::class, 'index'])->name('home.about');
    Route::put('homeabout/title/update', [HomeAboutController::class, 'titleUpdate'])->name('aboutTitle.update');
    Route::put('homeabout/title2/update', [HomeAboutController::class, 'title2Update'])->name('aboutTitle2.update');

    Route::post('about/add/atems', [HomeAboutController::class, 'aboutAddItems'])->name('about.Add.Items');
    Route::post('/about/item/update/{id}', [HomeAboutController::class, 'update'])->name('about.item.update');
    Route::delete('/about/item/delete/{id}', [HomeAboutController::class, 'destroy'])->name('about.item.delete');

    // our project 
    Route::get('home/our/project', [OurProjectController::class, 'index'])->name('admin.our.project');
    Route::put('/our-project/edit', [OurProjectController::class, 'update'])->name('our.project.edit');
    Route::post('/our/project/addflooring', [OurProjectController::class, 'storeFlooring'])->name('floorings.store');
    Route::delete('/flooring/destory/{id}', [OurProjectController::class, 'flooringDelete'])->name('flooring.destroy');
    Route::put('/our/project/flooring/update/{id}', [OurProjectController::class, 'flooringUpdate'])->name('floorings.update');
    Route::get('/our/project/flooring/status/{id}', [OurProjectController::class, 'toggleStatus'])->name('floorings.toggleStatus');
    Route::get('/our/project/flooring/view/{id}', [OurProjectController::class, 'flooringShow'])->name('flooring.show');

    //admin.our.banner
    Route::get('/our/banner', [OurBannerController::class, 'index'])->name('admin.our.banner');

    //image center the screen banner and also slider the banner
    Route::post('/our/banner/centerimage/store', [OurBannerController::class, 'imageBannerStore'])->name('our.bannercenter.store');
    Route::put('/our/banner/centerimage/update/{id}', [OurBannerController::class, 'imageBannerUpdate'])->name('our.bannercenter.update');

    Route::get('/banner/toggle-status/{id}', [OurBannerController::class, 'imageBannerToggle'])->name('banner.toggle.status.update');

    // manage our meet teams 
    Route::get('/meet/our/teams', [MeetOurTeamController::class, 'index'])->name('admin.meet.team');
    Route::put('/meet/our/team/update', [MeetOurTeamController::class, 'headingUpdate'])->name('meetout.team.update');
    Route::post('/member/add', [MeetOurTeamController::class, 'memberStore'])->name('member.store');
    Route::delete('/meet/our/teams/{id}', [MeetOurTeamController::class, 'memberDestroy'])->name('member.destroy');
    Route::put('/meet/our/teams/{id}/status', [MeetOurTeamController::class, 'toggleStatus'])->name('member.toggleStatus');
    Route::put('/meet/our/teams/{id}', [MeetOurTeamController::class, 'memberUpdate'])->name('member.update'); // Update member

    //our Best Plans 
    Route::get('/our/best/plans', [OurPlansController::class, 'index'])->name('our.best.plans');
    Route::put('/our/best/plan/update', [OurPlansController::class, 'ourPlanEdit'])->name('our.best.plan.update');
    Route::post('/our/best/plans/store', [OurPlansController::class, 'store'])->name('plan.store');
    Route::put('/our/best/plans/{id}', [OurPlansController::class, 'tourePlanUpdate'])->name('plan.update');
    Route::delete('/our/best/plans/{id}', [OurPlansController::class, 'planDestroy'])->name('plan.destroy');

    //faq setion 
    Route::get('/faq', [FAQController::class, 'index'])->name('admin.faq');
    Route::put('/faq', [FAQController::class, 'faqUpdate'])->name('faq.top.update');
    Route::post('/faq/store', [FAQController::class, 'store'])->name('faq.store');
    Route::put('/faq/update{id}', [FAQController::class, 'faqlistUpdate'])->name('faq.update');
    Route::delete('/faq/{id}', [FAQController::class, 'faqDestroy'])->name('faq.destroy');
    Route::put('/faq/{id}/status', [FAQController::class, 'toggleStatus'])->name('faq.toggleStatus');

    //uer contact us 
    Route::get('/user/contact', [UserContactController::class, 'index'])->name('admin.user.contact');
    Route::put('/contact/info/description/edit', [UserContactController::class, 'contactInfoUpdate'])->name('contact.info.edit');

    Route::put('/user/status/toggle/{id}', [UserContactController::class, 'toggleStatus'])->name('user.status.toggle');
    Route::delete('/user/delete/{id}', [UserContactController::class, 'delete'])->name('user.delete');

    //service book
    Route::get('/admin/service/book', [ServiceBookController::class, 'index'])->name('admin.service.service');
    Route::put('service/{id}/toggle-status', [AdminDashboardController::class, 'toggleStatus'])->name('service.toggle.status');
    Route::delete('service/{id}/delete', [AdminDashboardController::class, 'delete'])->name('service.delete');

    //Awesome Services 

    Route::get('admin/awesome/service', [OurAwesomeServiceController::class, 'index'])->name('admin.awesome.service');
    Route::post('admin/awesome/service/add', [OurAwesomeServiceController::class, 'store'])->name('awesome.service.add');
    Route::put('awesome-service/{id}/status', [OurAwesomeServiceController::class, 'toggleStatus'])->name('awesome.service.toggle');
    Route::put('awesome-service/{id}', [OurAwesomeServiceController::class, 'update'])->name('awesome.service.update');
    Route::put('awesome-service', [OurAwesomeServiceController::class, 'titleupdate'])->name('awesome.service.title.edit');

    Route::delete('awesome-service/{id}', [OurAwesomeServiceController::class, 'destroy'])->name('awesome.service.destroy');


    // socail media

    Route::get('/admin/social/media', [SocialMediaController::class, 'index'])->name('social.media.index');
    Route::post('/admin/social/media', [SocialMediaController::class, 'store'])->name('social.media.store');
    Route::put('/admin/social/media/{id}', [SocialMediaController::class, 'update'])->name('social.media.update');
    Route::delete('/admin/social/media/{id}', [SocialMediaController::class, 'destroy'])->name('social.media.destroy');

    //call to action
    Route::get('/admin/call/action', [CallActionController::class, 'index'])->name('call.to.action');
    Route::put('/admin/call/action/update', [CallActionController::class, 'update'])->name('our.banner.update');

    //footer banner 
    Route::get('/footer/bannere/long/Description/', [FooterLongDesController::class, 'index'])->name('footer.banner.long');
    Route::put('/our/banner/footer/update', [FooterLongDesController::class, 'footerUpdate'])->name('our.banner.footer.update');

    //footer short description
    Route::get('/admin/footer/short/description', [FooterShortDescController::class, 'index'])->name('footer.short.desc');
    Route::put('/footer/short-desc/', [FooterShortDescController::class, 'update'])->name('footer.short.desc.update');

    //company description

    Route::get('admin/company/description', [CompanyDescriptionController::class, 'index'])->name('company.description');
    Route::put('admin/homepage/update', [CompanyDescriptionController::class, 'update'])->name('homepage.top.update');

    //why choose us
    Route::get('admin/services/whychoose/us', [WhyChoooseUsController::class, 'index'])->name('admin.service.whychoose');
    Route::put('why/choose/update', [WhyChoooseUsController::class, 'update'])->name('choose.us.edit');
    Route::put('/clint/service/update/', [WhyChoooseUsController::class, 'serviceUpdate'])->name('clintServiceUpdate.update');

    //clint
    Route::get('admin/clint', [ClientController::class, 'index'])->name('clint');
    Route::put('clint/title/update', [ClientController::class, 'update'])->name('clint.title.update');
    Route::post('client/brand/logo', [ClientController::class, 'store'])->name('clint.logo.store');
    Route::get('client-brands/toggle/{id}', [ClientController::class, 'toggleStatus'])->name('client-brands.toggle');
    Route::put('client/brand/logo/update/{id}', [ClientController::class, 'Clientupdate'])->name('client.brands.update');
    Route::delete('client/brand/logo/delete/{id}', [ClientController::class, 'destroy'])->name('client.brands.destroy');

    // blog
    Route::get('admin/blog', [BogAddController::class, 'index'])->name('blog.add');
    Route::post('admin/blog/add', [BogAddController::class, 'store'])->name('blog.adds.store');
    Route::put('admin/blog/{id}', [BogAddController::class, 'update'])->name('blog.adds.update');
    Route::delete('admin/blog/{id}', [BogAddController::class, 'destroy'])->name('blog.adds.delete');

    //blog about author
    Route::get('admin/blog/author', [BlogAuthorController::class, 'index'])->name('blog.author');
    Route::put('author/update', [BlogAuthorController::class, 'update'])->name('author.update');

    //blog letest post
    Route::get('admin/blog/latest/post', [BlogLatestPostController::class, 'index'])->name('blog.latest.post');
    Route::post('admin/blog/latest/post/save', [BlogLatestPostController::class, 'store'])->name('post.store');
    Route::put('admin/blog/latest/post/{id}/update', [BlogLatestPostController::class, 'update'])->name('post.update');
    Route::delete('admin/blog/latest/add/{id}', [BlogLatestPostController::class, 'destroy'])->name('post.destroy');
    Route::post('admin/blog/toogel/update/{id}', [BlogLatestPostController::class, 'toggleStatus'])->name('post.toggleStatus');

    //blog category
    // Route::get('admin/blog/categories',[BlogCategorieController::class,'index'])->name('blog.categories');
    Route::get('admin/blog/categories', [BlogCategorieController::class, 'index'])->name('blog.categories');
    Route::post('admin/blog/categories/store', [BlogCategorieController::class, 'store'])->name('categories.store');
    Route::put('admin/blog/categories/update/{id}', [BlogCategorieController::class, 'update'])->name('categories.update');
    Route::post('admin/blog/categories/toggle/{id}', [BlogCategorieController::class, 'toggleStatus'])->name('categories.toggle');
    Route::delete('admin/blog/categories/delete/{id}', [BlogCategorieController::class, 'destroy'])->name('categories.destroy');

    //add blog page for text editor
    Route::get('admin/add/blog',[AddBlogController::class,'index'])->name('add.blogs');
    Route::get('admin/blog/edit/{id}',[BlogEditController::class,'editBlog'])->name('edit.blogs');

    //text widget
    Route::get('admin/blog/textwidget',[TextWidgetController::class,'index'])->name('text.widget');
    Route::put('/admin/text-widget', [TextWidgetController::class, 'update'])->name('text-widget.update');

});




// forentEnd part

Route::get('/', [HomePageController::class, 'index']);

Route::get('/everfresh/about', [AbouPageController::class, 'index'])->name('everfresh.home.about');
Route::post('/everfresh/about/service/book', [AbouPageController::class, 'store'])->name('user.service.book');


Route::get('/everfresh/service', [ServicePageController::class, 'index'])->name('everfresh.home.service');

Route::get('/everfresh/blog', [BlogPageController::class, 'index'])->name('everfresh.home.blog');
Route::get('/everfresh/blog/details/{id}',[BlogDetailsController::class,'showDeatils'])->name('blog.details');

Route::get('/everfresh/gallery', [GalleryPageController::class, 'index'])->name('everfresh.home.gallery');

Route::get('/everfresh/contact', [ContactController::class, 'index'])->name('everfresh.home.contact');
Route::post('/everfresh/contact', [ContactController::class, 'UserContactPageStore'])->name('user.contact.us');

//project detail page
// Route::get('project/details/', [ProjectDeatilController::class, 'index'])->name('project.details');

Route::get('project/details/{id}', [ProjectDeatilController::class, 'showDetails']);

// Route::get('/everfresh/service/',[AwesomeServiceController::class,'index'])->name('awesome.service');
