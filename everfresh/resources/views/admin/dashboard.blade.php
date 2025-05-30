@extends('admin.template')

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-12 mt-5">
            @php
            // Set the timezone to Nepal
            $currentHour = now()->setTimezone('Asia/Kathmandu')->format('H'); // Get the current hour in 24-hour format based on Nepal timezone
        
            // Determine the greeting
            if ($currentHour < 12) {
                $greeting = 'Good Morning';
            } elseif ($currentHour < 17) {
                $greeting = 'Good Afternoon';
            } else {
                $greeting = 'Good Evening';
            }
        @endphp
        
        <h3 class="page-title mt-3">{{ $greeting }}, {{ Auth::user()->name }}</h3>
        

            <ul class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">236</h3>
                        <h6 class="text-muted">Total Booking</h6> </div>
                    <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="4"></circle>
                    <line x1="20" y1="8" x2="20" y2="14"></line>
                    <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg></span> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">180</h3>
                        <h6 class="text-muted">Available Rooms</h6> </div>
                    <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                    <line x1="12" y1="1" x2="12" y2="23"></line>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg></span> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">1538</h3>
                        <h6 class="text-muted">Enquiry</h6> </div>
                    <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                    </path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="12" y1="18" x2="12" y2="12"></line>
                    <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg></span> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">364</h3>
                        <h6 class="text-muted">Collections</h6> </div>
                    <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                    </path>
                    </svg></span> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header">
                <h4 class="card-title float-left mt-2">Service BooKing</h4>
                <button type="button" class="btn btn-primary float-right veiwbutton">Veiw All</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center">
                        <thead>
                            <tr>
                                <th>ID</th>
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
            </div>
        </div>
    </div>
</div>
@endsection