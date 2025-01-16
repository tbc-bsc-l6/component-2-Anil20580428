@extends('admin.template')

@section('content')
<div class="container mt-4">


    <div class="card">
        <div class="card-header">
            <h3>Social Media Links</h3>
        </div>
        <div class="card-body">
            <!-- Add Social Media Form -->
            <form action="{{ route('social.media.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="platform">Platform</label>
                    <input type="text" name="platform" id="platform" class="form-control" placeholder="Enter social media platform" value="{{ old('platform') }}">
                    @error('platform') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="url" name="link" id="link" class="form-control" placeholder="Enter social media link" value="{{ old('link') }}">
                    @error('link') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Add Social Media</button>
            </form>

            <!-- Social Media Links Table -->
            <table class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Platform</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($socialMediaLinks as $link)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $link->platform }}</td>
                        <td><a href="{{ $link->link }}" target="_blank">{{ $link->link }}</a></td>
                        <td>
                            <!-- Edit Button -->
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal{{ $link->id }}">Edit</button>

                            <!-- Delete Form -->
                            {{-- <form action="{{ route('social.media.destroy', $link->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this link?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $link->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('social.media.update', $link->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Social Media</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="platform">Platform</label>
                                            <input type="text" name="platform" id="platform" class="form-control" value="{{ $link->platform }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="link">Link</label>
                                            <input type="url" name="link" id="link" class="form-control" value="{{ $link->link }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
