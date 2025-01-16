@extends('admin.template')

@section('content')
  


    <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
      <!-- Left-aligned Heading -->
      <h3 class="mb-0">Slider Manage or Add/Delete/Update</h3>
      
      <!-- Right-aligned Button -->
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#slider"><i class="bi bi-plus-square"></i>Add Slider</button>
  </div>
  
                <!--slider Modal -->
<div class="modal fade" id="slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('homepage.slider.add')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
              <label for="heading1" class="form-label">Heading One</label>
              <input name="heading1"  type="text" class="form-control" id="heading1" aria-describedby="heading1">
            </div>
          <div class="mb-3">
              <label for="heading2" class="form-label">location</label>
              <input name="heading2" type="text" class="form-control" id="heading2" aria-describedby="heading2">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Slider Description</label>
              <input name="description" type="text" class="form-control" id="description" aria-describedby="description">
            </div>
            <div class="mb-3">
              <label for="sliderimage" class="form-label">Slider Image</label>
              <input name="sliderimage" type="file" class="form-control" id="sliderimage" aria-describedby="sliderimage">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="container">
    <div class="col-lg-12">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($homeslider as $index => $slider)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" 
                        class="{{ $index == 0 ? 'active' : '' }}" 
                        aria-current="{{ $index == 0 ? 'true' : 'false' }}" 
                        aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
          @foreach ($homeslider as $index => $slider)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <img src="{{ asset($slider->sliderimage) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-center">{{ $slider->heading1 }}</h5>
                  <h4 class="text-center">{{ $slider->heading2 }}</h4>
                  <p class="text-center">{{ $slider->description }}</p>
                  
                  <!-- Buttons on the same line -->
                  <div class="d-flex justify-content-center gap-2 mt-2">
                      <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#slideredit{{ $slider->id }}">
                          <i class="bi bi-pencil-square"></i> Edit
                      </button>
                      <form action="{{ route('homepage.slider.delete', $slider->id) }}" method="POST" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">
                              <i class="bi bi-trash3"></i> Delete
                          </button>
                      </form>
                  </div>
              </div>
          </div>
      @endforeach
      
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <!-- Edit Slider Modal -->
    @foreach ($homeslider as $slider)
        <div class="modal fade" id="slideredit{{ $slider->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Slider</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('homepage.slider.edit', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="heading1" class="form-label">Heading One</label>
                                <input name="heading1" value="{{ $slider->heading1 }}" type="text" class="form-control" id="heading1">
                            </div>
                            <div class="mb-3">
                                <label for="heading2" class="form-label">Location</label>
                                <input name="heading2" value="{{ $slider->heading2 }}" type="text" class="form-control" id="heading2">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Slider Description</label>
                                <input name="description" value="{{ $slider->description }}" type="text" class="form-control" id="description">
                            </div>
                      
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
  </div>
</div>

    @endsection
