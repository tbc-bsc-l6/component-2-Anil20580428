
@include('template.top')
@include('template.navlink')
    <section class="breadcrumbSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pageTitle">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pageBreadcrumb">
                        <a href="{{url('/')}}">Home</a>
                        <span>&nbsp; / &nbsp;</span>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4694.028462696591!2d-1.079608!3d53.967015!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1734244446067!5m2!1sen!2sus" width="100%" height="455" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
    <section class="commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>Contact Us</h2>
                        <div class="titleBar"></div>
                        <p>
                            The helpless the powerless in a world of criminals who operate above the law texas tea here
                            is the story
                            of<br /> a man named Brady who was busy with three boys they call him Flipper Flipper faster
                            than lightning.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-7">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="conForms">
                        <form method="post" action="{{route('user.contact.us')}}" id="contactForm">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="con_fname" class="required" id="con_fname" value
                                        placeholder="First Name *" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_lname" class="required" id="con_lname" value
                                        placeholder="Last Name *" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="con_email" class="required" id="con_email" value
                                        placeholder="Email *" />
                                    <textarea name="con_message" class="required" id="con_message"
                                        placeholder="Comments"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="con_submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="conInfosHolder">
                        <div class="singleInfos wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <i class="icon-Pointer"></i>
                            <h4>Office Address</h4>
                            <p>25/2 Dublin, Ireland</p>
                        </div>
                        <div class="singleInfos mtop34 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <i class="icon-Phone2"></i>
                            <h4>Phone Numbers</h4>
                            <p>
                                (0) 123 456 789<br />
                                (0) 123 456 789
                            </p>
                        </div>
                        <div class="singleInfos mtop34 noPaddingBottom noBorderBottom wow fadeInUp"
                            data-wow-duration="700ms" data-wow-delay="400ms">
                            <i class="icon-Mail"></i>
                            <h4>E-mail Address</h4>
                            <p>
                                <a href="#"><span class="__cf_email__"
                                        data-cfemail="fc9d98919592bc91859f90999d92d29f9391">[email&#160;protected]</span></a><br />
                                <a href="#"><span class="__cf_email__"
                                        data-cfemail="a1c8cfc7cee1ccd8c2cdc4c0cf8fc2cecc">[email&#160;protected]</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @include('template.footer')