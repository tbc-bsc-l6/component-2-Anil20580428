@include('template.top')
@include('template.navlink')

    <section class="breadcrumbSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pageTitle">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pageBreadcrumb">
                        <a href="{{url('/')}}">Home</a>
                        <span>&nbsp; / &nbsp;</span>
                        <a href="#">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7">
                    <div class="singleBlogBpage wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="blogImg">
                            <img alt src="{{asset($blogDetails->image)}}">
                        </div>
                        <div class="blogMeta text-center">
                            <div class="metaGroup">
                                <a href="#" class="metagadmin">By Admin</a><span>/</span>
                                <a href="#">Interior Cleaning</a><span>/</span>
                                <a class="metagdate" href="#">{{$blogDetails->date}}</a>
                            </div>
                            <div class="blAuthor">
                                <a href="#"> <img alt src="{{asset($blogDetails->profile)}}"></a>
                            </div>
                        </div>
                        <div class="blogcont">
                            <h2><a href="#">{{$blogDetails->heading}}ddd</a></h2>
                               {!! $blogDetails->description1 !!}
                            <div class="blogDec1">
                                <p>
                                 
                                </p>
                                <blockquote>
                                    <p>
                                       {{$blogDetails->description2}}
                                    </p>
                                </blockquote>
                                <p>
                                    {{$blogDetails->description3}}
                                </p>
                            </div>
                            <div class="blogMetaBott">
                                <a class="breadmore" href="#">Read More<i class="fa fa-angle-double-right"></i></a>
                                <a href="#"><i class="fa fa-heart-o"></i>12 Likes</a>
                                <a href="#"><i class="fa fa-comments-o"></i>07 Comments</a>
                                <div class="rightblogshare">
                                    <a href="#"><i class="fa fa-share-alt"></i>Share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aboutAuthor wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <p class="abautTitle">About Author</p>
                        <div class="abauthor">
                            <img src="{{asset('storage/'.$blogAuthor->profile)}}" alt>
                            <p class="administrator">{{$blogAuthor->title1}} / <a href="#">{{$blogAuthor->title2}}</a></p>
                            <p>
                                {{$blogAuthor->description}}
                            </p>
                        </div>
                        <div class="socialIconbaut">
                            <a href="#" class="fac"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twi"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="goo"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="dri"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="link"><i class="fa fa-linkedin"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="comments">
                        <p class="abautTitle">User Comments <span>(3)</span></p>
                        <ol class="commentsList">
                            <li>
                                <div class="singleComments">
                                    <img alt src="https://themewar.com/html/myclean/images/author/co1.jpg">
                                    <div class="comHead">
                                        <a href="#" class="authorName">Bailey Wagh</a>
                                        <span>/</span>
                                        <a class href="#">Jan 22, 2016</a>
                                    </div>
                                    <div class="comDec">
                                        <p>
                                            Be right for you may not be right for some the law texas tea here is the
                                            story the one you see is smarter than he so join us here each week my
                                            friends.
                                        </p>
                                    </div>
                                    <div class="repBtn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li>
                                        <div class="singleComments">
                                            <img alt src="https://themewar.com/html/myclean/images/author/co2.jpg">
                                            <div class="comHead">
                                                <a href="#" class="authorName">Bailey Wagh</a>
                                                <span>/</span>
                                                <a class href="#">Jan 22, 2016</a>
                                            </div>
                                            <div class="comDec">
                                                <p>
                                                    Be right for you may not be right for some the law texas tea here is
                                                    the
                                                    story is smarter than he so join us here each week my friends.
                                                </p>
                                            </div>
                                            <div class="repBtn">
                                                <a href="#">reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="singleComments">
                                    <img alt src="https://themewar.com/html/myclean/images/author/co3.jpg">
                                    <div class="comHead">
                                        <a href="#" class="authorName">Bailey Wagh</a>
                                        <span>/</span>
                                        <a class href="#">Jan 22, 2016</a>
                                    </div>
                                    <div class="comDec">
                                        <p>
                                            Be right for you may not be right for some the law texas tea here is the
                                            story the one you see is smarter than he so join us here each week my
                                            friends.
                                        </p>
                                    </div>
                                    <div class="repBtn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="replayComments">
                        <p class="abautTitle">Post a Comment</p>
                        <div class="replayCoMin">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6 noPaddingRight">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5 sidebars">
                    <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <h3 class="widgetTitle">Search Product</h3>
                        <form action="#" class="woocommerce-product-search" method="get" role="search">
                            <input type="search" title="Enter Keyword" name="s" value placeholder="Enter Keyword">
                            <input type="submit" value="Search">
                        </form>
                    </aside>
                    <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <h3 class="widgetTitle">Latest Post</h3>
                        <div class="latestPost">
                            @foreach ($latestPost as $post)
                                
                            <div class="singlatPost">
                                <img src="{{asset('storage/'.$post->image)}}" alt>
                                <h2 class="fmOpensans bloglatTitle">
                                    <a href="#">{{$post->description}}</a>
                                </h2>
                                <p><a href="#">{{$post->date}}</a></p>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                    <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="promos">
                            <img src="https://themewar.com/html/myclean/images/blog/promosion.jpg" alt />
                        </div>
                    </aside>
                    <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                        <h3 class="widgetTitle">Categories</h3>
                        <ul class="product-categories">
                            @foreach ($category as $item)
                            <li><a href="#">{{$item->cname}}</a><span class="count">({{$item->total}})</span></li>

                            @endforeach
                        </ul>
                    </aside>
                    <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <h3 class="widgetTitle">{{$textWidget->title}}</h3>
                        <div class="textWidget">
                            <p>
                                {{$textWidget->description}}
                                
                            </p>
                        </div>
                    </aside>
                    <aside class="widget noMarginBottom wow fadeInUp" data-wow-duration="700ms" data-wow-delay="550ms">
                        <h3 class="widgetTitle">Tags</h3>
                        <div class="tagCloude">
                            <a href="#">Tips</a>
                            <a href="#">Tricks</a>
                            <a href="#">Cleaning</a>
                            <a href="#">Streaming</a>
                            <a href="#">Fresh air</a>
                            <a href="#">Healthy</a>
                            <a href="#">Offers</a>
                            <a href="#">Clean Surroundings</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('template.footer')