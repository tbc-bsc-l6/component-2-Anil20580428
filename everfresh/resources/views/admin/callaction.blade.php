@extends('admin.template')

@section('content')
<div class="col-md-12">
    <h1 class="bg-primary-subtle text-center text-dark py-3 px-3">Call To Action </h1>

        <!-- Form to update banner -->
        <form method="POST" action="{{ route('our.banner.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
    <label for="logo">Logo</label>
    <input type="file" class="form-control" id="logo" name="logo">
    @if($banner->logo)
    <img src="{{ asset('storage/' . $banner->logo) }}" class="card-img-left" alt="Logo" style="width: 18rem;">

    @endif
    </div>
    <div class="form-group">
    <label for="heading">Heading</label>
    <input type="text" class="form-control" id="heading" name="heading" value="{{ $banner->heading }}" required>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="6" required>{{ $banner->description }}</textarea>
</div>
<button type="submit" class="btn btn-sm btn-info mt-2 ml-3">Update Banner</button>
</form>
</div>
@endsection