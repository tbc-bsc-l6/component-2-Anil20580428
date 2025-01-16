@extends('admin.template')

@section('content')
<div class="mb-3 mt-5">
    <a href="{{route('add.blogs')}}" class="btn btn-primary">
        Add Blog
    </a>
</div>

<!-- Add Blog Modal -->
<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBlogModalLabel">Add New Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
        </div>
    </div>
</div>

<!-- Table to Display Blogs -->
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Date</th>
            <th>Heading</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $key => $blog)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td><img src="{{ asset($blog->image) }}" alt="Image" width="100" height="60"></td>
            <td>{{ $blog->date }}</td>
            <td>{{ $blog->heading }}</td>
            <td>{!! $blog->description1 !!}</td>
            <td>
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal{{$blog->id}}">View</button>
                <a class="btn btn-secondary" href="{{route('edit.blogs',$blog->id)}}">Edit</a>
                <form action="{{ route('blog.adds.delete', $blog->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                </form>
            </td>
        </tr>

        <!-- View Blog Modal -->
<div class="modal fade" id="viewModal{{$blog->id}}" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">View Blog Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Left Column: Image and Profile -->
                    <div class="col-4 text-center">
                        <img id="view-image" src="{{asset($blog->image)}}" alt="Blog Image" class="img-fluid mb-3" style="max-height: 200px;">
                        <img id="view-profile" src="{{asset($blog->profile)}}" alt="Profile Image" class="img-fluid" style="max-height: 100px;">
                    </div>
                    <!-- Right Column: Blog Details -->
                    <div class="col-8">
                        <p><strong>Date:</strong> <span id="view-date">{{$blog->date}}</span></p>
                        <p><strong>Heading:</strong> <span id="view-heading">{{$blog->heading}}</span></p>
                        <p><strong>Description 1:</strong> <span id="view-description1">{!! $blog->description1 !!}</span></p>
                        <p><strong>Description 2:</strong> <span id="view-description2">{{$blog->description2}}</span></p>
                        <p><strong>Description 3:</strong> <span id="view-description3">{{$blog->description3}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        @endforeach
    </tbody>
</table>



@endsection