@include('template.top')
@include('template.navlink')

    <section class="breadcrumbSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pageTitle">
                        <h2>Our  Services</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pageBreadcrumb">
                        <a href="{{url('/')}}">Home</a>
                        <span>&nbsp; / &nbsp;</span>
                        <a href="#">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="commonSection awesomesersec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>{{$awesomeServiceTitle->heading}}</h2>
                        <div class="titleBar"></div>
                        <p>
                            {{$awesomeServiceTitle->description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 noPadding">
                    <div class="row">
                        @foreach ($serviceRight as $left)
                            
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="iconbox4">
                                <a href="#"> <i class="fa-solid fa-brush"></i></a>
                               
                                <h2>{{$left->title}}</h2>
                                <p>
                                    {{$left->description}}
                                </p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="servicesAwesomimg">
                        <img src="https://themewar.com/html/myclean/images/home2/aservices.png" alt>
                    </div>
                </div>
                <div class="col-lg-3 noPadding">
                    <div class="row">
                        @foreach ($serviceRight as $right)
                            
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="iconbox4 icon4Right">
                               <a href="#"> <i class="fa-solid fa-brush"></i></a>
                               
                                <h2>{{$right->title}}</h2>
                                <p>
                                    {{$right->description}}
                                </p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="funfactSec overlay80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 exPaddRiFun resTexcenter">
                    <div class="sectionTitle marginBbottom30 white">
                        <h2>
                            Why Choose us
                        </h2>
                        <div class="titleBar left white"></div>
                        <p>
                            {{$whyDescription->description}}
                        </p>
                    </div>
                    <a class="cleanBtn_style2" href="#">Get Free Estimate <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-md-6">
                    <div class="funfactWrap">
                        <div class="row">
                            <div class="col-sm-6 text-center noPadding boTopY boRigY boBotY boLeftY">
                                <div class="SingleFun">
                                    <h2 class="fmOpensans count" data-counter="25">{{$clintServiceUpdate->shine}}</h2>
                                    <p>shine experience</p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center noPadding boTopY boRigY boBotY">
                                <div class="SingleFun">
                                    <h2 class="fmOpensans count" data-counter="900">{{$clintServiceUpdate->happy}}+</h2>
                                    <p>happy customers</p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center noPadding boLeftY boBotY boRigY">
                                <div class="SingleFun">
                                    <h2 class="fmOpensans count" data-counter="150">{{$clintServiceUpdate->employee}}</h2>
                                    <p>total employees</p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center noPadding boBotY boRigY">
                                <div class="SingleFun">
                                    <h2 class="fmOpensans count" data-counter="30">{{$clintServiceUpdate->branch}}</h2>
                                    <p>global branches</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="commonSection bggray plansec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2> {{$ourBestPlan->heading}}</h2>
                        <div class="titleBar"></div>
                        <p>
                            {{$ourBestPlan->description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($ourBestPlanToure as $item)
                <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-duration="700ms"
                data-wow-delay="300ms">
                <div class="singlePlan">
                    <div class="planHead">
                        <span class="dollcar">$</span>
                        <p class="price">{{$item->price}}</p>
                        <span class="monthPlan">/ mon</span>
                    </div>
                    <div class="planTitle">
                        <p>{{$item->planType}}</p>
                    </div>
                    <div class="planbody">
                        <ul>
                            <li>{{$item->feature}}</li>
                            <li>{{$item->cleaning}}</li>
                            <li>{{$item->moving}}</li>
                            <li>{{$item->calling}}</li>
                            <li>{{$item->work}}</li>
                            <li>{{$item->suggestion}}</li>
                            <li>{{$item->security}}</li>
                        </ul>
                    </div>
                    <div class="planFoot">
                        <a href="#" class="cleanBtn_style2">Buy Now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
                @endforeach
                
               
            </div>
        </div>
    </section>


    <section class="videoSection overlay70v">
        <div id="videoWrap1">
            <video id="myVideo1" muted loop poster="images/welcome.jpg">
                <source src="video/video (1).mp4" type="video/mp4">
            </video>
        </div>
        <div class="vidContent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Welcome to</h2>
                        <div class="playBtn">
                            <a href="javascript:void('0')" id="playVideos"></a>
                        </div>
                        <h3> EVERFRESH</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @include('template.footer')