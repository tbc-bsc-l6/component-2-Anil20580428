@extends('admin.template')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Project Details</h2>
    <a href="{{route('admin.our.project')}}" class="btn btn-secondary mt-4">Back to List</a>

    <div class="card">
        <div class="card-body">
            <h4><strong>Title:</strong> {{ $flooring->title }}</h4>
            <h5><strong>Name:</strong> {{ $flooring->name }}</h5>
            <h6><strong>Category:</strong> {{ $flooring->category }}</h6>
            <p><strong>Description:</strong> {{ $flooring->description }}</p>
            <p><strong>Author:</strong> {{ $flooring->author }}</p>
            <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($flooring->date)->format('Y-m-d') }}</p>
            <p><strong>Website:</strong> <a href="{{ $flooring->website }}" target="_blank">{{ $flooring->website }}</a></p>
            <img src="{{ asset('storage/' . $flooring->image) }}" alt="Project Image" class="img-fluid">

        </div>
    </div>
</div>
@endsection
