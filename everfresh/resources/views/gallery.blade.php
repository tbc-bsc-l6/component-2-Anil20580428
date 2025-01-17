@include('template.top')
@include('template.navlink')

    <section class="breadcrumbSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pageTitle">
                        <h2>Gallery</h2>
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

        <div class="container my-3">
            <div class="row">
                
           
            @foreach ($homeOurProjectList as $item)
                            
                        
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 100%;">
                <img src="{{asset('storage/'.$item->image)}}" class="card-img-top" alt="...">
                
                </div>
            </div>
            @endforeach
            </div>
        </div>

   
    </section>

   @include('template.footer')