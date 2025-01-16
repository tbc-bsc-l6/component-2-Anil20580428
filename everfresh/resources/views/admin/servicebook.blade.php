@extends('admin.template')

@section('content')
    <div class="mt-4">
      
        <table class="table table-hover table-center">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th class="text-center">Address</th>
                    <th class="text-right">Service Type</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serviceBook as $book)
                <tr>
                    <td class="text-nowrap">
                        <div>{{ $book->id }}</div>
                    </td>
                    <td class="text-nowrap">{{$book->name}}</td>
                    <td>{{$book->phone}}</td>
                    <td class="text-center">{{$book->address}}</td>
                    <td class="text-right">{{$book->choose}}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <!-- Status Toggle Form -->
                            <form action="{{ route('service.toggle.status', $book->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-{{ $book->status ? 'success' : 'danger' }} d-flex align-items-center">
                                    <i class="bi bi-{{ $book->status ? 'check-circle' : 'x-circle' }} me-1"></i>
                                    {{ $book->status ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
            
                            <!-- View Button (for modal) -->
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewBookingModal{{ $book->id }}">
                                View
                            </button>
            
                            <!-- Delete Form -->
                            <form action="{{ route('service.delete', $book->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
        <!-- Modal Template for Booking Details -->
        @foreach ($serviceBook as $book)
        <div class="modal fade" id="viewBookingModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="viewBookingModalLabel{{ $book->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewBookingModalLabel{{ $book->id }}">Booking Details - {{ $book->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Booking ID:</strong> {{ $book->id }}</p>
                        <p><strong>Name:</strong> {{ $book->name }}</p>
                        <p><strong>Phone:</strong> {{ $book->phone }}</p>
                        <p><strong>Address:</strong> {{ $book->address }}</p>
                        <p><strong>Post Code:</strong> {{ $book->postcode }}</p>
                        <p><strong>City:</strong> {{ $book->city }}</p>
                        <p><strong>Service Type:</strong> {{ $book->choose }}</p>
                        <p><strong>Status:</strong> {{ $book->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Comment:</strong> {{ $book->comment }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        
        <!-- Modal Template -->
        @foreach ($serviceBook as $book)
        <div class="modal fade" id="viewBookingModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="viewBookingModalLabel{{ $book->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewBookingModalLabel{{ $book->id }}">Booking Details - {{ $book->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Booking ID:</strong> {{ $book->id }}</p>
                        <p><strong>Name:</strong> {{ $book->name }}</p>
                        <p><strong>Phone:</strong> {{ $book->phone }}</p>
                        <p><strong>Address:</strong> {{ $book->address }}</p>
                        <p><strong>Service Type:</strong> {{ $book->choose }}</p>
                        <p><strong>Status:</strong> {{ $book->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Comment:</strong> {{ $book->comment }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        
    </div>
@endsection