@extends('admin.template')

@section('content')
    <div class="mt-3">



        <div class="row mt-3 mb-3 mx-3">
        


            {{-- //banner center screen --}}
            <div class="col-md-12">
            <h1 class="bg-primary-subtle text-center text-dark py-3 px-3">Footer Banner Long Description</h1>

                <!-- Form to update banner -->
                <form method="POST" action="{{ route('our.banner.footer.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
            @if($bannerFooter->logo)
            <img src="{{ asset('storage/' . $bannerFooter->logo) }}" class="card-img-left" alt="Logo" style="width: 18rem;">

            @endif
            </div>
    
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="8" required>{{ $bannerFooter->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-info mt-2 ml-3">Update Banner</button>
    </form>
        </div>
    </div>

    </div>
@endsection