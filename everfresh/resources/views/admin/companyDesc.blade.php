@extends('admin.template')

@section('content')
<div class="mt-4">

    <!-- Table -->
    <h3 class="text-dark">Logo and Company Information</h3>
    <table class="table table-bordered border-dark">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Sr no</th>
                <th scope="col">Logo</th>
                <th scope="col">Number</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('storage/' .$hometop->logo)}}" class="card-img-top w-100" alt="Logo">   
                    </div>
                </td>
                <td>{{$hometop->number}}</td>
                <td>{{$hometop->location}}</td>
                <td>
                    <button class="btn btn-sm btn-info"><i class="bi bi-eye"></i> Active</button>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Edit</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Modal for editing logo and company information -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Company Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('homepage.top.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="number" class="form-label">Number</label>
                            <input name="number" value="{{$hometop->number}}" type="number" class="form-control" id="number" aria-describedby="number">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input name="location" value="{{$hometop->location}}" type="text" class="form-control" id="location" aria-describedby="location">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input name="logo" type="file" class="form-control" id="logo" aria-describedby="logo">
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Left and Right Information -->
    <h3 class="text-dark py-3 text-center">Date and Time</h3>

    <!-- Table displaying Slider Left and Right content -->
    <table class="table table-bordered border-dark">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">SliderButton</th>
                <th scope="col">Heading</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Slider Left -->
            <tr>
                <th scope="row">Left</th>
                <td>{{$sliderLeft->heading}}</td>
                <td>
                    <p><strong>Day 1:</strong> {{$sliderLeft->day1}}</p>
                    <p><strong>Day 2:</strong> {{$sliderLeft->day2}}</p>
                    <h5>{{$sliderLeft->title}}</h5>
                    <p>{{$sliderLeft->phone}}</p>
                </td>
                <td>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalLeft"><i class="bi bi-pencil-square"></i> Edit</button>
                </td>
            </tr>

            <!-- Slider Right -->
            <tr>
                <th scope="row">Right</th>
                <td>{{$sliderRight->heading}}</td>
                <td>{{$sliderRight->description}}</td>
                <td>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalRight"><i class="bi bi-pencil-square"></i> Edit</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Modal for editing Slider Left -->
    <div class="modal fade" id="exampleModalLeft" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Slider Left</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sliderLeft.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" value="{{ $sliderLeft->heading }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="day1" class="form-label">Day 1</label>
                            <input type="text" class="form-control" id="day1" name="day1" value="{{ $sliderLeft->day1 }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="day2" class="form-label">Day 2</label>
                            <input type="text" class="form-control" id="day2" name="day2" value="{{ $sliderLeft->day2 }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $sliderLeft->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $sliderLeft->phone }}" required>
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

    <!-- Modal for editing Slider Right -->
    <div class="modal fade" id="exampleModalRight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Slider Right</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sliderRight.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" value="{{ $sliderRight->heading }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $sliderRight->description }}" required>
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

</div>
@endsection
