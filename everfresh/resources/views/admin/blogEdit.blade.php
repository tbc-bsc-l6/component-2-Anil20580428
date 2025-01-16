@extends('admin.template')

@section('content')
<form action="{{route('blog.adds.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <!-- Left Column -->
            <div class="col-6">
                <!-- Image Preview in Card -->
                <div class="card mb-3">
                    <div class="card-header">
                        Current Image
                    </div>
                    <div class="card-body text-center">
                        @if($blog->image)
                        <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-fluid rounded" style="max-height: 200px;">
                        @else
                        <p class="text-muted">No image available</p>
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label for="edit-image" class="form-label">Upload New Image</label>
                    <input type="file" class="form-control" name="image" id="edit-image">
                </div>
                <div class="mb-3">
                    <label for="edit-date" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" id="edit-date" required value="{{$blog->date}}">
                </div>
                
            </div>

            <!-- Right Column -->
            
            <div class="col-6">
                 <!-- Image Preview in Card -->
                 <div class="card mb-3">
                    <div class="card-header">
                        Profile Image
                    </div>
                    <div class="card-body text-center">
                        @if($blog->image)
                        <img src="{{ asset($blog->profile) }}" alt="Blog Image" class="img-fluid rounded" style="max-height: 200px;">
                        @else
                        <p class="text-muted">No image available</p>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="edit-profile" class="form-label">Profile</label>
                    <input type="file" class="form-control" name="profile" id="edit-profile">
                </div>
                <div class="mb-3">
                    <label for="edit-heading" class="form-label">Heading</label>
                    <textarea class="form-control" name="heading" id="edit-heading" rows="2" required>{{$blog->heading}}</textarea>
                </div>
            </div>
        </div>

        <!-- Description Fields -->
        <div class="row">
            <div class="col-12 mb-3">
                <label for="edit-description1" class="form-label">Description 1</label>
                <textarea class="form-control" name="description1" id="ckbox" rows="3" required>{!! $blog->description1 !!}</textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="edit-description2" class="form-label">Description 2</label>
                <textarea class="form-control" name="description2" id="edit-description2" rows="3">{{$blog->description2}}</textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="edit-description3" class="form-label">Description 3</label>
                <textarea class="form-control" name="description3" id="edit-description3" rows="3">{{$blog->description3}}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Blog</button>
    </div>
</form>
@endsection
