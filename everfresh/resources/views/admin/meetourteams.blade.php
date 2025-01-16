@extends('admin.template')

@section('content')
<div class="row mt-3 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 text-center">
        <div class="card" style="width: 100%;">
            <div class="card-body">
              <form action="{{route('meetout.team.update')}}" method="post">
                @csrf
                @method('PUT')                
                <div class="form-group mt-1">
                    <input name="heading" type="text" class="form-control" id="heading" name="heading" value="{{$meetourteam->heading}}">
                </div>
                
                <div class="form-group mt-2">
                    <textarea name="description" class="form-control" id="paragraph" name="paragraph" rows="4">{{$meetourteam->description}}</textarea>
                </div>
                                
                <button type="submit" class="btn btn-info mt-1">Update</button>
              </form>
            </div>
          </div>
    </div>
</div>
<div class="row mt-3">
    <!-- Table Section -->
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header bg-info text-white text-center">
                <h4>Team Members</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($members as $key => $member)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                @if($member->image)
                                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" width="50" height="50" class="img-thumbnail">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->position }}</td>
                            <td>
                                <!-- Toggle Status -->
                                <form action="{{ route('member.toggleStatus', $member->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    @if ($member->status == 1)
                                        <button type="submit" class="btn btn-success btn-sm">Active</button>
                                    @else
                                        <button type="submit" class="btn btn-info btn-sm">Inactive</button>
                                    @endif
                                </form>
                
                                <!-- Edit Button -->
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#memberEdit{{ $member->id }}">Edit</button>
                
                                <!-- Delete Button -->
                                <form action="{{ route('member.destroy', $member->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this member?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                
                        <!-- Modal for Editing Member -->
                        <div class="modal fade" id="memberEdit{{ $member->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Member</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="position">Position</label>
                                                <input type="text" name="position" class="form-control" value="{{ $member->position }}" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="image">Image</label>
                                                <input type="file" name="image" class="form-control">
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
                <h4>Add Member</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Member Name" required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="position">Position</label>
                        <input name="position" type="text" class="form-control" id="position" placeholder="Member Position" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-info mt-3 w-100">Add Member</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
