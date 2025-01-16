@extends('admin.template')

@section('content')
    <table class="table table-border mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">profile</th>
                <th scope="col">title first</th>
                <th scope="col">title second</th>
                <th scope="col">description</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <div class="card" style="width: 10rem;">
                        <img src="{{asset('storage/'.$byAuthor->profile)}}" class="card-img-top" alt="...">
                    </div>
                </td>
                <td>{{$byAuthor->title1}}</td>
                <td>{{$byAuthor->title2}}</td>
                <td>{{$byAuthor->description}}</td>
                <td>
                    <!-- Edit Button triggers Modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{$byAuthor->id}}">
                        Edit
                    </button>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{$byAuthor->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$byAuthor->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{$byAuthor->id}}">Edit Author</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Edit Form -->
                                    <form action="{{ route('author.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="profile" class="form-label">Profile Image</label>
                                            <input type="file" name="profile" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="title1" class="form-label">Title 1</label>
                                            <input type="text" name="title1" class="form-control" value="{{ $byAuthor->title1 }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title2" class="form-label">Title 2</label>
                                            <input type="text" name="title2" class="form-control" value="{{ $byAuthor->title2 }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="3" required>{{ $byAuthor->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
