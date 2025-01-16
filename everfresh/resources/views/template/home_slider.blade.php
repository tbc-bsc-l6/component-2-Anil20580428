
<section class="sliderSection">
    <div class="container-fluid">
        <div class="row">
            <div class="tp-banner">
                <ul>
                    @foreach ($homeSlider as $slider)
 
                    <li data-transition="cube" data-slotamount="7" data-masterspeed="1000">
                        <img src="{{asset($slider->sliderimage)}}" alt>
                        <div class="tp-caption sfb" data-x="left" data-y="center" data-hoffset="-85"
                            data-voffset="-90" data-speed="1600" data-start="1500" data-easing="Power4.easeOut">
                            <div class="revCont">
                                <h1>{{$slider->heading1}}</h1>
                                <h2>{{$slider->heading2}}</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb" data-x="left" data-y="center" data-hoffset="-83"
                            data-voffset="30" data-speed="2000" data-start="2500" data-easing="Power4.easeOut">
                            <div class="revCont">
                                <p>
                                    {{$slider->description}}
                                </p>
                            </div>
                        </div>
                        <div class="tp-caption sfb text-left" data-x="left" data-y="center" data-hoffset="-83"
                            data-voffset="112" data-speed="2000" data-start="3000" data-easing="Power4.easeOut">
                            <div class="revBtn">
                                <a class="cleanBtn_style2" href="#">Get free Estimate <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="findlocation bggray">
    <div class="container">
        <div class="row">
            <div class="findlocationbg overlay85">
                <div class="col-sm-5 text-center">
                    <div class="leftinfo">
                        <h1>{{$sliderLeft->heading}}</h1>
                        <div class="addsloc">
                            <p>{{$sliderLeft->day1}}</p>
                            <p>{{$sliderLeft->day2}}</p>
                        </div>
                        <h2>{{$sliderLeft->title}}</h2>
                        <h3>+977 {{$sliderLeft->phone}}</h3>
                    </div>
                </div>
                <div class="col-sm-7 text-center">
                    <div class="findform">
                        <h2>{{$sliderRight->heading}}</h2>
                        <p>
                            {{$sliderRight->description}}
                        </p>
                        <form action="#">
                            <input type="text" placeholder="Enter Your Postal Code / Zip">
                            <button type="submit">Find Location</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>