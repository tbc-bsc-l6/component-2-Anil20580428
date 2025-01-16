@extends('admin.template')
@section('content')

    <h3 class="bg-dark text-white py- text-center">Silder butoon text or manage update only</h3>
    <div class="row mt-3">
      <div class="col-lg-5 col-md-12">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h3 class="card-title mb-3">{{$sliderLeft->heading}}</h3>
                <p class="card-subtitle mb-2 text-body-secondary">{{$sliderLeft->day1}}</p>
                <p class="card-text">{{$sliderLeft->day2}}</p>
                <h5 class="card-title mt-3">{{$sliderLeft->title}}</h5>
                <p class="card-text">{{$sliderLeft->phone}}</p>
    
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
            </div>
        </div>
    </div>
    
    <!--left Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Slider Left</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inside modal -->
                    <form action="{{ route('sliderLeft.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" value="{{ $sliderLeft->heading }}" required>
                            @error('heading')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="day1" class="form-label">Day 1</label>
                            <input type="text" class="form-control" id="day1" name="day1" value="{{ $sliderLeft->day1 }}" required>
                            @error('day1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="day2" class="form-label">Day 2</label>
                            <input type="text" class="form-control" id="day2" name="day2" value="{{ $sliderLeft->day2 }}" required>
                            @error('day2')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $sliderLeft->title }}" required>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $sliderLeft->phone }}" required>
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        <div class="col-lg-7 col-md-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">{{$sliderRight->heading}}</h5>
                  <p class="card-text mt-4">{{$sliderRight->description}}</p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalright">edit</button>
                </div>
              </div>
        </div>
    </div>

    <!--riht Modal -->
    <div class="modal fade" id="exampleModalright" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Slider Left</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- Form inside modal -->
                  <form action="{{ route('sliderRight.update') }}" method="POST">
                      @csrf
                      @method('PUT')
                      
                      <div class="mb-3">
                          <label for="heading" class="form-label">Heading</label>
                          <input type="text" class="form-control" id="heading" name="heading" value="{{ $sliderRight->heading }}" required>
                          @error('heading')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                      
  
                      <div class="mb-3">
                          <label for="description" class="form-label">Description</label>
                          <input type="text" class="form-control" id="title" name="description" value="{{ $sliderRight->description }}" required>
                          @error('title')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>
                      
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection