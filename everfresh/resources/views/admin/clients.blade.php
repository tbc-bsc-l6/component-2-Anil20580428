@extends('admin.template')

@section('content')
<div class="row mt-3 mb-3 mx-3">
    {{-- Banner Center Screen --}}
    <div class="col-md-12">
        <h1 class="text-center text-dark py-3 px-3">Client Title Management</h1>

        {{-- Display the Data in Table Format --}}
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $clientTitle->id }}</td>
                    <td>{{ $clientTitle->title }}</td>
                    <td>{{ $clientTitle->description }}</td>
                    <td>
                        <!-- Button to trigger the edit form modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editClientTitleModal">
                            Edit
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- Edit Form Modal --}}
<div class="modal fade" id="editClientTitleModal" tabindex="-1" aria-labelledby="editClientTitleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientTitleModalLabel">Edit Client Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to update banner -->
                <form method="POST" action="{{ route('clint.title.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $clientTitle->title }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="8" required>{{ $clientTitle->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Client Title</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#trustBy">
        Add Client Company Logo
    </button>

    {{-- add Form Modal --}}
<div class="modal fade" id="trustBy" tabindex="-1" aria-labelledby="editClientTitleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientTitleModalLabel">Edit Client Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to add banner -->
                <form method="POST" action="{{route('clint.logo.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="description">Logo</label>
                        <input class="form-control" id="description" name="logo" type="file" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Client Title</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<table class="table mt-4">
    <thead class="table-dark">
        <tr>
            <th scope="col">Sr NO</th>
            <th scope="col">Client Company Logo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientBrand as $key => $brand)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($brand->logo) }}" class="card-img-top" alt="Logo">
                </div>
            </td>
            <td>
                <!-- Status Toggle -->
                @if ($brand->status == 1)
                    <a href="{{ route('client-brands.toggle', $brand->id) }}" class="btn btn-info">Active</a>
                @else
                    <a href="{{ route('client-brands.toggle', $brand->id) }}" class="btn btn-danger">Inactive</a>
                @endif

                <!-- Edit Button to Open Modal -->
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $brand->id }}">
                    Edit
                </button>

                <!-- Delete Button -->
                <form action="{{ route('client.brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this brand?');">Delete</button>
                </form>
            </td>
        </tr>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal{{ $brand->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $brand->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $brand->id }}">Edit Client Brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('client.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="logo">Client Logo</label>
                                <input type="file" class="form-control" name="logo" id="logo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1" {{ $brand->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $brand->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
</table>

@endsection
