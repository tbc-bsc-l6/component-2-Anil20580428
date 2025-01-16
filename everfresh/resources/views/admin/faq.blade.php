@extends('admin.template')
@section('content')
<div class="row mt-3 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 text-center">
        <div class="card" style="width: 100%;">
            <div class="card-body">
              <form action="{{route('faq.top.update')}}" method="post">
                @csrf
                @method('PUT')                
                <div class="form-group mt-2">
                    <textarea name="description" class="form-control" id="paragraph" name="paragraph" rows="4">{{$faq->description}}</textarea>
                </div>
                                
                <button type="submit" class="btn btn-info mt-1">Update</button>
              </form>
            </div>
          </div>
    </div>
</div>


{{-- faq items list  --}}

<div class="row mt-3">
    <!-- Table Section -->
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header bg-info text-white text-center">
                <h4>FAQ </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($faqItem as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
          
                            <td>{{ $item->heading }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <!-- Toggle Status -->
                                <form action="{{ route('faq.toggleStatus', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    @if ($item->status == 1)
                                        <button type="submit" class="btn btn-success btn-sm">Active</button>
                                    @else
                                        <button type="submit" class="btn btn-info btn-sm">Inactive</button>
                                    @endif
                                </form>
                
                                <!-- Edit Button -->
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#memberEdit{{ $item->id }}">Edit</button>
                
                                <!-- Delete Button -->
                                <form action="{{ route('faq.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this member?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                
                        <!-- Modal for Editing Member -->
                        <div class="modal fade" id="memberEdit{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Member</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('faq.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">heading</label>
                                                <input type="text" name="heading" class="form-control" value="{{ $item->heading }}" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="description">Position</label>
                                                <input type="text" name="description" class="form-control" value="{{ $item->description }}" required>
                                            </div>
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="5">No Members Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header bg-info text-white text-center">
                <h4>Add FAQ List</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('faq.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="heading">Heading</label>
                        <input name="heading" type="text" class="form-control" id="heading"  required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="description">Description</label>
                        <input name="description" type="text" class="form-control" id="description" required>
                    </div>
                    
                    <button type="submit" class="btn btn-info mt-3 w-100">Add FAQ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection