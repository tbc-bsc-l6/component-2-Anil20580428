@extends('admin.template')

@section('content')
<h3 class="bg-dark text-white py- text-center">Home page About-1</h3>
<div class="row mt-4">
  <div class="col-lg-12 col-md-12 mb-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Heading</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$aboutTitle->heading}}</td>
                    <td>{{$aboutTitle->description}}</td>
                    <td>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#titleEdit">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

      <!-- Edit Modal for About Title -->
      <div class="modal fade" id="titleEdit" tabindex="-1" aria-labelledby="titleEditLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleEditLabel">Edit About Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('aboutTitle.update') }}" method="POST">
            @csrf
            @method('PUT') <!-- Use PUT method for updating the resource -->
            
            <div class="mb-3">
              <label for="heading" class="form-label">Heading</label>
              <input type="text" class="form-control" id="heading" name="heading" value="{{ $aboutTitle->heading }}" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" required>{{ $aboutTitle->description }}</textarea>
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
  

    {{-- about section title-2 --}}

    <div class="col-lg-12 col-md-12 mb-4">
      <h3 class="bg-dark text-white py- text-center"> About Page Description-2</h3>

      <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered">
              <thead class="table-success">
                  <tr>
                      <th>Heading</th>
                      <th>Description</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>{{$aboutTitle2->heading}}</td>
                      <td>{{$aboutTitle2->description}}</td>
                      <td>
                          <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#title2Edit">
                              <i class="bi bi-pencil-square"></i> Edit
                          </button>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  
        <!-- Edit Modal for About Title -->
        <div class="modal fade" id="title2Edit" tabindex="-1" aria-labelledby="titleEditLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleEditLabel">Edit About Title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('aboutTitle2.update') }}" method="POST">
              @csrf
              @method('PUT') <!-- Use PUT method for updating the resource -->
              
              <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" value="{{ $aboutTitle2->heading }}" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $aboutTitle2->description }}</textarea>
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

</div>

<div class="d-flex justify-content-between mb-3">
  <div class="form-inline d-flex">
      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
<!-- Add Items Button -->
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-house-add-fill"></i>Add Items</button>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('about.Add.Items')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">
          <div class="mb-3">
            <label for="itemTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="itemTitle" name="title" required>
          </div>
          <div class="mb-3">
            <label for="itemDescription" class="form-label">Description</label>
            <textarea class="form-control" id="itemDescription" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Table -->
<table class="table table-bordered border-dark">
  <thead class="bg-dark text-white text-center">
      <tr>
          <th scope="col">Sr no</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($aboutitem as $item)
      <tr>
        <th scope="row" class="text-center align-middle">{{$item->id}}</th>
       
        <td class="align-middle">{{$item->title}}</td>
        <td class="align-middle">{{$item->description}}</td>
        <td class="text-center align-middle">
          <div class="d-flex justify-content-center gap-2">
            <button class="btn btn-sm btn-info d-flex align-items-center"><i class="bi bi-eye me-1"></i> Active</button>
            <button class="btn btn-sm btn-success d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}"><i class="bi bi-pencil-square me-1"></i> Edit</button>
            <form action="{{route('about.item.delete', $item->id)}}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger d-flex align-items-center" onclick="return confirm('Are you sure you want to delete this item?')">
                <i class="bi bi-trash me-1"></i> Delete
              </button>
            </form>
          </div>
        </td>
        
            <!-- Edit Modal -->
<div class="modal fade" id="edit{{$item->id}}" tabindex="-1" aria-labelledby="editLabel{{$item->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel{{$item->id}}">Edit Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('about.item.update', $item->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="modal-body">
          <div class="mb-3">
            <label for="itemTitle{{$item->id}}" class="form-label">Title</label>
            <input type="text" class="form-control" id="itemTitle{{$item->id}}" name="title" value="{{$item->title}}" required>
          </div>
          <div class="mb-3">
            <label for="itemDescription{{$item->id}}" class="form-label">Description</label>
            <textarea class="form-control" id="itemDescription{{$item->id}}" name="description" rows="3" required>{{$item->description}}</textarea>
          </div>
          <div class="mb-3">
            <label for="logo{{$item->id}}" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo{{$item->id}}" name="logo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

      
    </tr>
      @endforeach
  </tbody>
</table>

@endsection