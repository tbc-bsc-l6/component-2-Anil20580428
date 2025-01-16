@extends('admin.template')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 mb-3">
            <h3>Service description</h3>
            <form action="{{ route('awesome.service.title.edit') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="heading" id="title" class="form-control" placeholder="Enter service title" value="{{ $awesomeServiceTitle->heading }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter service description">{{ $awesomeServiceTitle->description }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
        <div class="col-lg-6 mb-3">
            <h3>Add services</h3>
            <form action="{{ route('awesome.service.add') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter service title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter service description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save Service</button>
            </form>
        </div>
    </div>
    



    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>Description</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <!-- Toggle Status Form -->
                            <form action="{{ route('awesome.service.toggle', $service->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-{{ $service->status ? 'danger' : 'success' }}">
                                    {{ $service->status ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>

                            <!-- Edit Button for Modal -->
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $service->id }}">Edit</button>

                            <!-- Delete Form -->
                            <form action="{{ route('awesome.service.destroy', $service->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $service->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $service->id }}">Edit Service</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('awesome.service.update', $service->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" rows="4">{{ $service->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
