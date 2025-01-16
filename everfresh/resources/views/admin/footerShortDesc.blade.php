@extends('admin.template')

@section('content')
    <div class="mt-4">

        <form action="{{route('footer.short.desc.update')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" name="description" class="form-control fs-4 fw-3" id="description" rows="4">{{$shortDesc->description}}</textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
          </form>


    </div>
@endsection