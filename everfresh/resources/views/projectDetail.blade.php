@include('template.top')
@include('template.navlink')


<section class="breadcrumbSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="pageTitle">
            <h2>Our Project Details</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pageBreadcrumb">
            <a href="{{url('/')}}">Home</a>
            <span>&nbsp; / &nbsp;</span>
            <a href="#">project Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="commonSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <div class="full-image">
            <img id="fullImage" src="{{asset('storage/'.$showDetails->image)}}" alt="Full Image">
          </div>

          <div class="owl-carousel">
            {{-- <div class="item"><img src="https://themewar.com/html/myclean/images/portfolio/single/1th.jpg"
                alt="Image 1"></div>
            <div class="item"><img src="https://themewar.com/html/myclean/images/portfolio/single/2th.jpg"
                alt="Image 2"></div>
            <div class="item"><img src="https://themewar.com/html/myclean/images/portfolio/single/3th.jpg"
                alt="Image 3"></div>
            <div class="item"><img src="https://themewar.com/html/myclean/images/portfolio/single/4th.jpg"
                alt="Image 4"></div>
            <div class="item"><img src="https://themewar.com/html/myclean/images/portfolio/single/1th.jpg"
                alt="Image 5"></div>
            <div class="item"><img src="https://themewar.com/html/myclean/images/portfolio/single/2th.jpg"
                alt="Image 6"></div> --}}
          </div>

          <div class="custom-nav">
            <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
            <div class="owl-next"><i class="fa fa-angle-right"></i></div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="gallInfoRow">
            <div class="row">
              <div class="col-lg-8 col-sm-6 noPaddingRight">
                <h2 class="rowTitle">{{$showDetails->title}}</h2>
                <div class="galldecCont">
                  <p>
                    {{$showDetails->description}}
                  </p>
                </div>
                <a class="cleanBtn_style1" href="#">View Live Demo <i class="fa fa-angle-right"></i></a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="gallDetails">
                  <h2 class="rowTitle">Details</h2>
                  <ul>
                    <li><span>Date:</span>{{$showDetails->date}}</li>
                    <li class="aut"><span>Author:</span><a href="#">{{$showDetails->author}}</a></li>
                    <li><span>Category:</span>{{$showDetails->category}}</li>
                    <li class="url"><span>Website:</span><a href="#">{{$showDetails->website}}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="portHead">
          <div class="col-lg-6">
            <h2 class="rowTitle">Related Portfolio</h2>
          </div>
          <div class="col-lg-6">
            <div class="relportnav pull-right">
              <a href="#" class="prevProduct"><i class="fa fa-angle-left"></i></a>
              <a href="#" class="nextProduct"><i class="fa fa-angle-right"></i></a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-lg-12 d-flex">
         
          <div class="image-container1">
            <img src="https://themewar.com/html/myclean/images/portfolio/related/4.jpg" alt>

            <div class="overlay1">
              <div class="text1">
                <a class="swipebox" href="https://themewar.com/html/myclean/images/portfolio/4c/1.jpg"><i
                    class="icon-Search"></i></a>
                <a href="#"><i class="fa-solid fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="image-container1">
            <img src="https://themewar.com/html/myclean/images/portfolio/related/2.jpg" alt>

            <div class="overlay1">
              <div class="text1">
                <a class="swipebox" href="https://themewar.com/html/myclean/images/portfolio/4c/1.jpg"><i
                    class="icon-Search"></i></a>
                <a href="#"><i class="fa-solid fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="image-container1">
            <img src="https://themewar.com/html/myclean/images/portfolio/related/3.jpg" alt>

            <div class="overlay1">
              <div class="text1">
                <a class="swipebox" href="https://themewar.com/html/myclean/images/portfolio/4c/1.jpg"><i
                    class="icon-Search"></i></a>
                <a href="#"><i class="fa-solid fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="image-container1">
            <img src="https://themewar.com/html/myclean/images/portfolio/related/1.jpg" alt>

            <div class="overlay1">
              <div class="text1">
                <a class="swipebox" href="#"><i
                    class="icon-Search"></i></a>
                <a href="#"><i class="fa-solid fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@include('template.footer')