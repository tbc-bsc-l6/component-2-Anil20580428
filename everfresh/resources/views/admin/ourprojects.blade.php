@extends('admin.template')

@section('content')
<style>
    /* Custom CSS for positioning and styling */
    .form-container {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Reduced margin from the top */
    }
    .form-card {
        width: 100%;
        padding: 15px; /* Compact padding */
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9; /* Light background color */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    .form-card .mb-2 {
        margin-bottom: 15px; /* Adjust margin between inputs */
    }
    .btn-custom {
        width: 100%;
        font-size: 16px;
        padding: 10px; /* Adjust button padding */
    }
    body {
        padding-top: 20px; /* Ensure there's no body overlap */
    }
</style>

<div class="container">
    <div class="row form-container">
        <div class="col-lg-12">
            <div class="form-card">
                <form method="POST" action="{{route('our.project.edit')}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="title" class="form-label fw-bold">Title</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{$ourProjectTitle->title}}">
                    </div>

                    <div class="mb-2">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3">{{$ourProjectTitle->description}}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-info">edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="container mt-4">
        <h2 class="text-center mb-4">
            Our Project Floorings
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                Add Project
            </button>
        </h2>
        
        <!-- Add Project Modal -->
        <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('floorings.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <!-- Left Column -->
                                <div class="form-group mb-3">
                                    <label for="category" class="form-label">Choose a Project Category</label>
                                    <div class="input-group">
                                        <select class="form-control" id="category" name="projectType" required>
                                            <option value="" disabled selected>Choose <i class="bi bi-arrow-down"></i></option>
                                            <option value="flooring">Flooring</option>
                                            <option value="commercial">Commercial</option>
                                            <option value="exterior">Exterior</option>
                                            <option value="streaming">Streaming</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <!-- Add the dropdown arrow icon on the right side -->
                                        <span class="input-group-text">
                                            <i class="bi bi-chevron-down"></i>
                                        </span>
                                    </div>
                                </div>
                    
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter project title" required>
                                    </div>
                    
                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter project name" required>
                                    </div>
                    
                                    <div class="form-group mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter project description" required></textarea>
                                    </div>
                    
                                    <div class="form-group mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                </div>
                    
                                <!-- Right Column -->
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <label for="author" class="form-label">Author</label>
                                        <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name">
                                    </div>
                    
                                    <div class="form-group mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <input type="text" class="form-control" id="category" name="category" required>
                                    </div>
                    
                                    <div class="form-group mb-3">
                                        <label for="website" class="form-label">Website</label>
                                        <input type="url" class="form-control" id="website" name="website" placeholder="Enter website URL" required>
                                    </div>
                    
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Project</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
    <table class="table table-bordered table-sm">
        <thead class="bg-success-subtle">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($floorings as $key => $flooring)
            <tr>
                <td>{{ $flooring->id }}</td>
                <td>{{ $flooring->title }}</td>
                <td>{{ $flooring->name }}</td>
                <td>{{ \Carbon\Carbon::parse($flooring->date)->format('Y-m-d') }}</td>
                <td>{{ $flooring->author }}</td>
                <td class="p-0">
                    {{$flooring->description}}
                </td>
                <td>
                    <div class="d-flex">
                        @if($flooring->status == 1)
    <a href="{{ route('floorings.toggleStatus', $flooring->id) }}" type="button" class="btn btn-sm btn-success me-2">
        <i class="bi bi-check-circle"></i> Active
    </a>
@else
    <a href="{{ route('floorings.toggleStatus', $flooring->id) }}" type="button" class="btn btn-sm btn-info me-2">
        <i class="bi bi-x-circle"></i> Inactive
    </a>
@endif

                        <a href="{{route('flooring.show',$flooring->id)}}" class="btn btn-sm btn-secondary me-2"><i class="bi bi-eye-fill"></i>view</a>
                        <!-- Edit Button -->
                        <button type="button" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editProjectModal{{$flooring->id}}">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                
                        <!-- Delete Button -->
                        <form action="{{ route('flooring.destroy', $flooring->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" class="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

             <!-- edit Project Modal -->
             <div class="modal fade" id="editProjectModal{{$flooring->id}}" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProjectModalLabel">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('floorings.update', $flooring->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="form-group mb-3">
                                        <label for="projectType" class="form-label">Choose a Project Category</label>
                                        <div class="input-group">
                                            <select class="form-control" id="projectType" name="projectType" required>
                                                <option value="flooring" {{ $flooring->projectType == 'flooring' ? 'selected' : '' }}>Flooring</option>
                                                <option value="commercial" {{ $flooring->projectType == 'commercial' ? 'selected' : '' }}>Commercial</option>
                                                <option value="exterior" {{ $flooring->projectType == 'exterior' ? 'selected' : '' }}>Exterior</option>
                                                <option value="streaming" {{ $flooring->projectType == 'streaming' ? 'selected' : '' }}>Streaming</option>
                                                <option value="other" {{ $flooring->projectType == 'other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                            <span class="input-group-text">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $flooring->title }}" placeholder="Enter project title" required>
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $flooring->name }}" placeholder="Enter project name" required>
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter project description" required>{{ $flooring->description }}</textarea>
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="date" name="date" value="{{ \Carbon\Carbon::parse($flooring->date)->format('Y-m-d') }}" required>
                                        </div>
                                    </div>
            
                                    <!-- Right Column -->
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label for="author" class="form-label">Author</label>
                                            <input type="text" class="form-control" id="author" name="author" value="{{ $flooring->author }}" placeholder="Enter author name">
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <input type="text" class="form-control" id="category" name="category" value="{{ $flooring->category }}" required>
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label for="website" class="form-label">Website</label>
                                            <input type="url" class="form-control" id="website" name="website" value="{{ $flooring->website }}" placeholder="Enter website URL" required>
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Project</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            @endforeach
        </tbody>
    </table>
    
    
</div>
@endsection
