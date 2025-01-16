@extends('admin.template')

@section('content')
    <div class="mt-4">

        <div class="container">
            <div class="row form-container">
                <div class="col-lg-12">
                   
                    <div class="form-card">
                        <h3 class="text-center">Contact Us</h3>
                        <form method="POST" action="{{route('contact.info.edit')}}">
                            @csrf
                            @method('PUT')
        
                            <div class="mb-2">
                                <textarea name="description" class="form-control" id="description" rows="3">{{$contactInfo->description}}</textarea>
                            </div>
        
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-info">edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<!-- Table -->
<table class="table table-bordered border-dark">
    <thead class="bg-dark text-white text-center">
        <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Comment</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userContactInforamtion as $userMessage)
        <tr>
            <th scope="row" class="text-center align-middle">{{ $userMessage->id }}</th>
            <td class="text-center align-middle">
                {{ $userMessage->firstName }} {{ $userMessage->lastName }}
            </td>
            <td class="align-middle">{{ $userMessage->email }}</td>
            <td class="align-middle">{{ $userMessage->comment }}</td>
            
            <td class="text-center align-middle">
                <div class="d-flex justify-content-center gap-2">
                    <!-- Active/Inactive Toggle -->
                    <form action="{{ route('user.status.toggle', $userMessage->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-{{ $userMessage->status == 1 ? 'secondary' : 'success' }} d-flex align-items-center">
                            <i class="bi bi-{{ $userMessage->status == 1 ? 'eye-slash' : 'eye' }} me-1"></i>
                            {{ $userMessage->status == 1 ? 'Inactive' : 'Active' }}
                        </button>
                    </form>

                    <!-- Delete -->
                    <form action="{{ route('user.delete', $userMessage->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger d-flex align-items-center" onclick="return confirm('Are you sure you want to delete this item?')">
                            <i class="bi bi-trash me-1"></i> Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


    </div>

@endsection