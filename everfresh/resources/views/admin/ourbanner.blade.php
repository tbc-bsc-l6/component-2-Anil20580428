@extends('admin.template')

@section('content')

    <!-- Banner Image Center -->
    <h1 class="bg-primary-subtle text-center text-dark py-3 px-3">Reviews and Rating</h1>

    <div class="d-flex justify-content-between mb-3">
        <!-- Search Bar -->
        <div class="form-inline d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
        <!-- Add Banner Button -->
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#bannerAdd"><i class="bi bi-plus-square"></i> Add Reviews</button>
    </div>

    <!-- Add Banner Modal -->
    <div class="modal fade" id="bannerAdd" tabindex="-1" aria-labelledby="bannerAddLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="bannerAddLabel">Add New Banner</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('our.bannercenter.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input name="position" type="text" class="form-control" id="position" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input name="logo" type="file" class="form-control" id="logo" required>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Banner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <table class="table table-bordered border-dark">
        <thead style="background-color: #004964; color: white;">
            <tr>
                <th scope="col">Sr No</th>
                <th scope="col">Logo</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $index => $banner)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>
                        <img src="{{ asset('storage/' . $banner->logo) }}" class="img-fluid" alt="Logo" style="width: 100px;">
                    </td>
                    <td>{{ $banner->name }}</td>
                    <td>{{ $banner->position }}</td>
                    <td>{{ $banner->description }}</td>
                    <td class="d-flex justify-content-around align-items-center">
                        @if($banner->status == 1)
                            <a href="{{ route('banner.toggle.status.update', $banner->id) }}" class="btn btn-sm btn-info">
                                 Active
                            </a>
                        @else
                            <a href="{{ route('banner.toggle.status.update', $banner->id) }}" class="btn btn-sm btn-danger">
                                 Inactive
                            </a>
                        @endif
                        <button class="btn btn-sm btn-success ms-2" data-bs-toggle="modal" data-bs-target="#bannerEdit{{ $banner->id }}">
                            Edit
                        </button>
                    </td>
                </tr>

                <!-- Edit Banner Modal -->
                <div class="modal fade" id="bannerEdit{{ $banner->id }}" tabindex="-1" aria-labelledby="bannerEditLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="bannerEditLabel">Edit Banner</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('our.bannercenter.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control" id="name" value="{{ $banner->name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position</label>
                                        <input name="position" type="text" class="form-control" id="position" value="{{ $banner->position }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" id="description" rows="3" required>{{ $banner->description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input name="logo" type="file" class="form-control" id="logo">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
@endsection
