@include('template.top')
@include('template.navlink')

<section class="breadcrumbSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="pageTitle">
                    <h2>About us</h2>
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

<section class="commonSection bggray noPaddingBottom welcomeSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-6 text-center center">
                <div class="spSecTitle">
                    <h2>
                        {{$about2->heading}}
                    </h2>
                    <div class="titleBar"></div>
                    <p>
                        {{$about2->description}}
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
{{-- <--testimonial --> --}}
   
    
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

<section class="overlay70B funfactbg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="singleFun">
                    <!-- <i class="clean-Clean-Counter-1"></i> -->
                    <i class="fa-regular fa-star"></i>
                    <h2 class="fmOpensans count" data-counter="25">25</h2>
                    <p>Shine Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                <div class="singleFun">
                    <!-- <i class="clean-Clean-Counter-2"></i> -->
                    <i class="fa-regular fa-star"></i>
                    <h2 class="fmOpensans count" data-counter="900">900 <span>+</span></h2>
                    <p>Shine Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                <div class="singleFun">
                    <!-- <i class="clean-Clean-Counter-3"></i> -->
                    <i class="fa-regular fa-star"></i>
                    <h2 class="fmOpensans count" data-counter="150">150</h2>
                    <p>Shine Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                <div class="singleFun">
                    <!-- <i class="clean-Clean-Counter-4"></i> -->
                    <i class="fa-regular fa-star"></i>
                    <h2 class="fmOpensans count" data-counter="30">30</h2>
                    <p>Shine Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faq2Sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="paq2wrap">
                    <div class="sectionTitle">
                        <h2>FAQ</h2>
                        <div class="titleBar left"></div>
                        <p>
                            {{$faq->description}}
                        </p>
                    </div>
                    <div class="faqaccordion2">
                        <div class="panel-group" id="accordion">
                            @foreach ($faqAddList as $item)
                            <div class="panel">
                                <div class="panelHeading2">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faq{{$item->id}}"
                                        class="panel-title">
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
            <div class="col-lg-6 bggraybok">
                <div class="servicesBooking">
                    <div class="sectionTitle">
                        <h2>Service Booking</h2>
                        <div class="titleBar left"></div>
                        <p>
                            The helpless the powerless in a world of criminals who operate above the law texas
                            tea here is the story of a man named Brady
                        </p>
                    </div>
                    <div class="row">
                        <div class="servicesContact2">
                            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('user.service.book') }}" method="post" id="servicesForm">
    @csrf

    <div class="row">
        <div class="col-lg-6">
            <input type="text" name="ser_name" class="required" id="ser_name" value="{{ old('ser_name') }}" placeholder="Name *">
            @error('ser_name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-6">
            <input type="email" name="ser_email" class="required" id="ser_email" value="{{ old('ser_email') }}" placeholder="Email *">
            @error('ser_email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-6">
            <input type="text" name="ser_phone" class="required" id="ser_phone" value="{{ old('ser_phone') }}" placeholder="Phone Number *">
            @error('ser_phone') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-6">
            <input type="text" name="ser_post" class="required" id="ser_post" value="{{ old('ser_post') }}" placeholder="Zip / Postal Code *">
            @error('ser_post') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-12">
            <input type="text" name="ser_adds" class="required" id="ser_adds" value="{{ old('ser_adds') }}" placeholder="Address *">
            @error('ser_adds') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-6">
            <input type="text" name="ser_city" class="required" id="ser_city" value="{{ old('ser_city') }}" placeholder="City *">
            @error('ser_city') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-6">
            <select name="ser_option" id="ser_option" class="required">
                <option value selected>Choose a Service</option>
                <option value="saab" {{ old('ser_option') == 'saab' ? 'selected' : '' }}>Saab</option>
                <option value="mercedes" {{ old('ser_option') == 'mercedes' ? 'selected' : '' }}>Mercedes</option>
                <option value="audi" {{ old('ser_option') == 'audi' ? 'selected' : '' }}>Audi</option>
            </select>
            @error('ser_option') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-12">
            <textarea name="ser_comment" class="required" id="ser_comment" placeholder="Comments">{{ old('ser_comment') }}</textarea>
            @error('ser_comment') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-12">
            <button type="submit" id="ser_submit">Submit</button>
        </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('template.footer')
    