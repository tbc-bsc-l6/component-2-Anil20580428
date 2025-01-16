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
                    <div class="row">
                        @foreach ($blogAdd as $blogadd)
                            
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="singleBlog">
                                <div class="blogImg">
                                    <img alt src="{{asset($blogadd->image)}}">
                                </div>
                                <div class="blogMeta">
                                    <div class="blAuthor">
                                        <a href="#"> <img alt
                                                src="{{asset($blogadd->profile)}}"></a>
                                    </div>
                                    <a class="blmDate" href="#">{{$blogadd->date}}</a>
                                </div>
                                <div class="blogcont">
                                    <h2><a href="{{route('blog.details',$blogadd->id)}}">{{$blogadd->heading}}</a></h2>
                                    <div class="blogDec">
                                        <p>
                                            {!! $blogadd->description1 !!} <a href="#">[...]</a>
                                        </p>
                                    </div>
                                    <div class="blogMetaBott">
                                        <a class="breadmore" href=" ">Read More<i
                                                class="fa fa-angle-double-right"></i></a>
                                        <a href="#"><i class="fa fa-heart-o"></i>12 Likes</a>
                                        <a href="#"><i class="fa fa-comments-o"></i>07 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        @endforeach

                        <div class="clearfix"></div>
                       {{-- pagination --}}
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
                        <h3 class="widgetTitle">Text Widget</h3>
                        <div class="textWidget">
                            <p>
                                Than he so join us here <a href="#">each week my friends</a> you
                                are sure to get a <span>smile from seven</span> stranded
                                castaways week my friends.
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