@extends('admin.template')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-4 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Blog Categories
</button>

<!-- Add Category Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="cname" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="cname" id="cname" required>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Total</label>
                        <input type="number" name="total" class="form-control" id="number" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Total</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $category->cname }}</td>
            <td>{{ $category->total }}</td>
            <td>
                <form method="POST" action="{{ route('categories.toggle', $category->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-sm {{ $category->status ? 'btn-success' : 'btn-warning' }}">
                        {{ $category->status ? 'Active' : 'Deactive' }}
                    </button>
                </form>
            </td>
            <td>
                <!-- Edit Button Trigger -->
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $category->id }}">
                    Edit
                </button>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $category->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('categories.update', $category->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="cname" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" name="cname" value="{{ $category->cname }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="total" class="form-label">Total</label>
                                        <input type="number" class="form-control" name="total" value="{{ $category->total }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Button -->
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
