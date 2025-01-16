@include('template.top')
@include('template.navlink')
@include('template.home_slider')




    <section class="commonSection bggray noPaddingBottom welcomeSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-6 text-center center">
                    <div class="spSecTitle">
                        <h2>
                            {{$homeAbout->heading}}
                        </h2>
                        <div class="titleBar"></div>
                        <p>
                            {{$homeAbout->description}}
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="welclean">
            <div class="welimg wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <img src="https://themewar.com/html/myclean/images/home1/welcome.jpg" alt>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 iconbox1wrap">
                        <div class="row">
                           
                            @foreach ($homeAboutLeft as $item)

                           <div class="col-sm-6 text-right wow fadeInUp" data-wow-duration="700ms"
                            data-wow-delay="450ms">
                           <div class="iconbox1">
                               <i class="fa-brands fa-react"></i>
                               <h2>{{$item->title}}</h2>
                               <p>
                                   {{$item->description}}
                               </p>
                           </div>
                            </div>
                    
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="commonSection noPaddingBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2> {{$homeOurProject->title}}</h2>
                        <div class="titleBar"></div>
                        <p>
                           {{$homeOurProject->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="filterNav">
                        <ul class="nav nav-tabs filterNav" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">All Projects</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Flooring</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Commercial</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Exterior</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Streaming</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Others</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        @foreach ($homeOurProjectList as $all)
                            
                        
                        <div class="portfolio-item">
                            <img src="{{asset('storage/'.$all->image)}}"
                                class="img-responsive" alt="Portfolio Image 1">
                                
                            <div class="custom-overlay">
                                <div class="overlay-content">
                                    <a href="https://themewar.com/html/myclean/images/portfolio/4c/1.jpg" class="swipebox"><i
                                            class="icon-Search"></i></a>
                                    <h3><a href="{{url('project/details',$all->id)}}">{{$all->title}}</a></h3>
                                    <p>{{$all->projectType}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab2">
                        
                        @foreach ($ourFlooring as $flooring)
                        
                            @if ($flooring->projectType == 'flooring')
                            
                            <div class="portfolio-item">
                                <img src="{{asset('storage/'.$flooring->image)}}" class="img-responsive" alt="Portfolio Image">
                                <div class="custom-overlay">
                                    <div class="overlay-content">
                                        <a href="https://themewar.com/html/myclean/images/portfolio/4c/5.jpg" class="swipebox"><i class="icon-Search"></i></a>
                                        <h3><a href="{{url('project/deatils/',$flooring->id)}}">{{ $flooring->title }}</a></h3>
                                        <p>{{ $flooring->projectType }}</p>
                                    </div>
                                </div>
                            </div> 
                            @endif

                        @endforeach
                         
                        
                    </div>
                    

                    <div role="tabpanel" class="tab-pane" id="tab3">
                        @foreach ($ourCommerical as $commerical)
                        
                            @if ($commerical->projectType == 'commercial')
                            
                            <div class="portfolio-item">
                                <img src="{{asset('storage/'.$commerical->image)}}" class="img-responsive" alt="Portfolio Image">
                                <div class="custom-overlay">
                                    <div class="overlay-content">
                                        <a href="https://themewar.com/html/myclean/images/portfolio/4c/5.jpg" class="swipebox"><i class="icon-Search"></i></a>
                                        <h3><a href="{{url('project/details',$commerical->id)}}">{{ $commerical->title }}</a></h3>
                                        <p>{{ $commerical->projectType }}</p>
                                    </div>
                                </div>
                            </div> 
                            @endif

                        @endforeach
                      
                        
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab4">
                        @foreach ($ourExterior as $exterior)
                        
                            @if ($exterior->projectType == 'exterior')
                            
                            <div class="portfolio-item">
                                <img src="{{asset('storage/'.$exterior->image)}}" class="img-responsive" alt="Portfolio Image">
                                <div class="custom-overlay">
                                    <div class="overlay-content">
                                        <a href="https://themewar.com/html/myclean/images/portfolio/4c/5.jpg" class="swipebox"><i class="icon-Search"></i></a>
                                        <h3><a href="{{url('project/details',$exterior->id)}}">{{ $exterior->title }}</a></h3>
                                        <p>{{ $exterior->projectType }}</p>
                                    </div>
                                </div>
                            </div> 
                            @endif

                        @endforeach
                        
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab5">
                        @foreach ($ourStreaming as $streaming)
                        
                            @if ($streaming->projectType == 'streaming')
                            
                            <div class="portfolio-item">
                                <img src="{{asset('storage/'.$streaming->image)}}" class="img-responsive" alt="Portfolio Image">
                                <div class="custom-overlay">
                                    <div class="overlay-content">
                                        <a href="https://themewar.com/html/myclean/images/portfolio/4c/5.jpg" class="swipebox"><i class="icon-Search"></i></a>
                                        <h3><a href="{{url('project/details',$streaming->id)}}">{{ $streaming->title }}</a></h3>
                                        <p>{{ $streaming->projectType }}</p>
                                    </div>
                                </div>
                            </div> 
                            @endif

                        @endforeach
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab6">
                        @foreach ($ourOther as $other)
                        
                            @if ($other->projectType == 'other')
                            
                            <div class="portfolio-item">
                                <img src="{{asset('storage/'.$other->image)}}" class="img-responsive" alt="Portfolio Image">
                                <div class="custom-overlay">
                                    <div class="overlay-content">
                                        <i class="icon-Search"></i>
                                        <h3><a href="{{url('project/details',$other->id)}}">{{ $other->title }}</a></h3>
                                        <p>{{ $other->projectType }}</p>
                                    </div>
                                </div>
                            </div> 
                            @endif

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="calltoaction">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="logo2call">
                        <img src="{{asset('storage/'.$banner->logo)}}" alt>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 noPaddingLeft">
                    <div class="calltoCont">
                        <h2>{{$banner->heading}}</h2>
                        <p>
                            {{$banner->description}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 text-right">
                    <div class="calltobtn">
                        <a href="#" class="cleanBtn_style2">Get free Estimate <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="commonSection servicessec">
        <div class="container-fluid">
            <div class="row servPadding">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sectionTitle awesomeSer">
                                <h2>
                                    {{$awesomeServiceTitle->heading}}
                                </h2>
                                <div class="titleBar left"></div>
                                <p>
                                    {{$awesomeServiceTitle->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($awesomeService as $service)
                            
                        <div class="col-sm-6 noPaddingRight wow fadeInUp" data-wow-duration="700ms"
                            data-wow-delay="300ms">
                            <div class="iconbox2">
                                <i class="fa-solid fa-broom"></i>
                                <h2>{{$service->title}}</h2>
                                <p>
                                    {{$service->description}}
                                </p>
                            </div>
                        </div>
                        
                        @endforeach
 
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 noPadding">
                    <div class="servicesContact">
                        <form action="#" method="post" id="servicesForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="serconttitle">Service Booking</h2>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name *" id="ser_name" name="ser_name"
                                        class="required">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email *" id="ser_email" name="ser_email"
                                        class="required">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone Number *" id="ser_phone" name="ser_phone"
                                        class="required">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Zip / Postal Code *" id="ser_post" name="ser_post"
                                        class="required">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Address *" id="ser_adds" name="ser_adds"
                                        class="required">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="City *" id="ser_city" name="ser_city"
                                        class="required">
                                </div>
                                <div class="col-lg-6">
                                    <select id="ser_option" class="required" name="ser_option">
                                        <option selected value>choose a services</option>
                                        <option value="Clean">Clean</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Comments" id="ser_comment" name="ser_comment"
                                        class="required"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="ser_submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testmonuial overlay80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="testcarohome1">
                    @foreach ($review as $r)
                    <div class="singleTest">
                        <div class="testimg">
                            <img src="{{asset('storage/'.$r->logo)}}" alt>
                        </div>
                        <div class="testCont">
                            <p>
                                {{$r->description}}
                            </p>
                        </div>
                        <div class="testdeg">
                            <h4>{{$r->name}}</h4>
                            <p>{{$r->position}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>


    <section class="commonSection noPaddingBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2> {{$meetOurteam->heading}}</h2>
                        <div class="titleBar"></div>
                        <p>
                            {{$meetOurteam->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 teamWrap">
                    @foreach ($teamMember as $team)
                    <div class="singleTeam">
                        <div class="singtemimg">
                            <img src="{{asset($team->image)}}" alt>
                        </div>
                        <div class="sintemDec">
                            <h3>{{$team->name}}</h3>
                            <h4>{{$team->position}}</h4>
                        </div>
                    </div>
                    @endforeach
                    
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
                <source src="https://themewar.com/html/myclean/video/video.mp4" type="video/mp4">
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


    <section class="commonSection faqsec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 noPaddingRight">
                    <div class="paqwrap">
                        <div class="sectionTitle marginBbottom40">
                            <h2>FAQ</h2>
                            <div class="titleBar left"></div>
                            <p>
                                {{$faq->description}}
                            </p>
                        </div>
                        <div class="faqaccordion">
                            <div class="panel-group" id="accordion">
                                @foreach ($faqAddList as $item)
                                <div class="panel">
                                    <div class="panelHeading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq{{$item->id}}"
                                            class="panel-title">
                                            <i class="fa-solid fa-plus"></i>
                                            {{$item->heading}}
                                        </a>
                                    </div>
                                    <div id="faq{{$item->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               {{$item->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 noPaddingLeft">
                    <div class="brustedby">
                        <div class="sectionTitle">
                            <h2>{{$clientTitle->title}}</h2>
                            <div class="titleBar left"></div>
                            <p>
                                {{$clientTitle->description}}
                            </p>
                        </div>
                        <div class="clientLogo">
                            <div class="row">
                                @foreach ($clientBrand as $brand)
                                   @if ($brand->status ==1)
                                   <div class="col-sm-6 noPadding">
                                    <div class="singleClient">
                                        <a href="#">
                                            <img src="{{$brand->logo}}" alt>
                                        </a>
                                    </div>
                                </div>
                                   @endif 
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@include('template.footer')
<script src="swipeboxx/js/jquery.swipebox.min.js"></script>