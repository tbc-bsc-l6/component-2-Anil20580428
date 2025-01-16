@extends('admin.template')

@section('content')

<h4 class="text-dark text-center mt-4 mb-2">Blog Latest Post</h4>

<div class="row">
    <div class="col-lg-8 col-md-12">
        <!-- Blog Posts Table -->
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>
                    <div class="card" style="width: 10rem;">
                        <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="...">
                        
                      </div>
                </td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->date }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$post->id}}">
                        Edit</button>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <form action="{{ route('post.toggleStatus', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-{{ $post->status ? 'success' : 'warning' }} btn-sm">
                            {{ $post->status ? 'Active' : 'Deactive' }}
                        </button>
                    </form>
                    
                </td>
              </tr>

              <!-- Modal -->
<div class="modal fade" id="edit{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ $post->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $post->date }}">
            </div>

            <button type="submit" class="btn btn-success">Update Post</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
              @endforeach
            </tbody>
        </table>
    </div>

    <!-- Form to Add New or Edit Blog Post -->
    <div class="col-lg-4 col-md-12">
        <h5>Add New Blog Post </h5>
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" >
            </div>

            <button type="submit" class="btn btn-success">save</button>
        </form>
    </div>
</div>

@endsection
