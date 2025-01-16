@extends('admin.template')

@section('content')
<div class="row mt-4">
    <div class="col-lg-8 text-center">
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{$textWidget->title}}</td>
                <td>{{$textWidget->description}}</td>
                <td>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal{{$textWidget->id}}">edit</button>
                </td>
              </tr>
              
            </tbody>
          </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$textWidget->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Text Widget</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('text-widget.update', $textWidget->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" value="{{ $textWidget->title }}" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" class="form-control" id="description" rows="4" required>{{ $textWidget->description }}</textarea>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection