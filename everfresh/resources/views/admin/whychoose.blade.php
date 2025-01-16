@extends('admin.template')

@section('content')
    <h3 class="text-dark font-weight-bold mt-3">Why Choose Us</h3>
    
    <form action="{{ route('choose.us.edit') }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea name="description" id="desc" rows="4" class="form-control fs-5">{{ $whyDescription->description }}</textarea>
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-info">Edit</button>
        </div>
    </form>

    <div class="funfactWrapBorder mt-4">
      <div class="funfactWrap">
          <div class="row mb-2">
              <div class="col-sm-6 text-center noPadding boTopY boRigY boBotY boLeftY">
                  <div class="SingleFun border border-success">
                      <h2 class="fmOpensans count" data-counter="25">{{$clintServiceUpdate->shine}}</h2>
                      <p>shine experience</p>
                  </div>
              </div>
              <div class="col-sm-6 text-center noPadding boTopY boRigY boBotY">
                  <div class="SingleFun border border-success">
                      <h2 class="fmOpensans count" data-counter="900">{{$clintServiceUpdate->happy}}+</h2>
                      <p>happy customers</p>
                  </div>
              </div>
              <div class="col-sm-6 text-center noPadding boLeftY boBotY boRigY mt-2">
                  <div class="SingleFun border border-success">
                      <h2 class="fmOpensans count" data-counter="150">{{$clintServiceUpdate->employee}}</h2>
                      <p>total employees</p>
                  </div>
              </div>
              <div class="col-sm-6 text-center noPadding boBotY boRigY mt-2">
                  <div class="SingleFun border border-success">
                      <h2 class="fmOpensans count" data-counter="30">{{$clintServiceUpdate->branch}}</h2>
                      <p>global branches</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  {{-- Edit Our Clint --}}
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Edit
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Our Clint Service Update</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('clintServiceUpdate.update', $clintServiceUpdate->id) }}" method="post">
                      @csrf
                      @method('PUT')
  
                      <div class="mb-3">
                          <label for="shine" class="form-label">Shine Experience</label>
                          <input type="number" class="form-control" id="shine" name="shine" 
                                 value="{{ $clintServiceUpdate->shine }}" required>
                      </div>
                      <div class="mb-3">
                          <label for="happy" class="form-label">Happy Customers</label>
                          <input type="number" class="form-control" id="happy" name="happy" 
                                 value="{{ $clintServiceUpdate->happy }}" required>
                      </div>
                      <div class="mb-3">
                          <label for="employee" class="form-label">Total Employees</label>
                          <input type="number" class="form-control" id="employee" name="employee" 
                                 value="{{ $clintServiceUpdate->employee }}" required>
                      </div>
                      <div class="mb-3">
                          <label for="branch" class="form-label">Global Branches</label>
                          <input type="number" class="form-control" id="branch" name="branch" 
                                 value="{{ $clintServiceUpdate->branch }}" required>
                      </div>
  
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  
    
@endsection
