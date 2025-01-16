@extends('admin.template')

@section('content')
<div class="row mt-3 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 text-center">
        <div class="card" style="width: 100%;">
            <div class="card-body">
              <form action="{{route('our.best.plan.update')}}" method="post">
                @csrf
                @method('PUT')                
                <div class="form-group mt-1">
                    <input name="heading" type="text" class="form-control" id="heading" name="heading" value="{{$plans->heading}}">
                </div>
                
                <div class="form-group mt-2">
                    <textarea name="description" class="form-control" id="paragraph" name="paragraph" rows="4">{{$plans->description}}</textarea>
                </div>
                                
                <button type="submit" class="btn btn-info mt-1">Update</button>
              </form>
            </div>
          </div>
    </div>
</div>
<div class="row mt-3">
    <!-- Plans Display Section -->
    <div class="col-lg-8">
        <div class="row">
            @forelse($toureplan as $plan)
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">${{ $plan->price }}/mon</h5>
                            <p class="card-text bg-dark text-white">{{ $plan->planType }}</p>
                            <p class="card-text">Features:</p>
                            <p class="card-text">{{ $plan->cleaning }}</p>
                            <p class="card-text">{{ $plan->moving }}</p>
                            <p class="card-text">{{ $plan->calling }}</p>
                            <p class="card-text">{{ $plan->work }}</p>
                            <p class="card-text">{{ $plan->suggestion }}</p>
                            <p class="card-text">{{ $plan->enhancedsecurity }}</p>
                            <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editPlanModal{{ $plan->id }}">Edit</button>
                            <form action="{{ route('plan.destroy', $plan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this plan?')">Delete</button>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editPlanModal{{ $plan->id }}" tabindex="-1" aria-labelledby="editPlanModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editPlanModalLabel">Edit Plan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('plan.update', $plan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="price_{{ $plan->id }}">Price (per month)</label>
                                        <input type="number" name="price" id="price_{{ $plan->id }}" class="form-control" value="{{ $plan->price }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="planType_{{ $plan->id }}">Plan Type</label>
                                        <input type="text" name="planType" id="planType_{{ $plan->id }}" class="form-control" value="{{ $plan->planType }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="cleaning_{{ $plan->id }}">Cleaning</label>
                                        <input type="text" name="cleaning" id="cleaning_{{ $plan->id }}" class="form-control" value="{{ $plan->cleaning }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="moving_{{ $plan->id }}">Moving</label>
                                        <input type="text" name="moving" id="moving_{{ $plan->id }}" class="form-control" value="{{ $plan->moving }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="calling_{{ $plan->id }}">Calling</label>
                                        <input type="text" name="calling" id="calling_{{ $plan->id }}" class="form-control" value="{{ $plan->calling }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="work_{{ $plan->id }}">Work</label>
                                        <input type="text" name="work" id="work_{{ $plan->id }}" class="form-control" value="{{ $plan->work }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="suggestion_{{ $plan->id }}">Suggestion</label>
                                        <input type="text" name="suggestion" id="suggestion_{{ $plan->id }}" class="form-control" value="{{ $plan->suggestion }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="enhancedsecurity_{{ $plan->id }}">Enhanced Security</label>
                                        <input type="text" name="enhancedsecurity" id="enhancedsecurity_{{ $plan->id }}" class="form-control" value="{{ $plan->enhancedsecurity }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-3 w-100">Update Plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No plans found.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Form Section -->
    <div class="col-lg-4">
        <form action="{{ route('plan.store') }}" method="POST">
            @csrf
            <h4 class="text-center">Add New Plan</h4>
            <div class="form-group mt-3">
                <label for="price" class="form-label">Price (per month)</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter price" required>
            </div>
            <div class="form-group mt-3">
                <label for="plan_name" class="form-label">Plan Name</label>
                <input type="text" name="planType" class="form-control" id="plan_name" placeholder="Enter plan name" required>
            </div>
            <div class="form-group mt-3">
                <label for="cleaning" class="form-label">Cleaning</label>
                <input type="text" name="cleaning" class="form-control" id="cleaning" placeholder="Enter cleaning details" required>
            </div>
            <div class="form-group mt-3">
                <label for="moving" class="form-label">Moving</label>
                <input type="text" name="moving" class="form-control" id="moving" placeholder="Enter moving details" required>
            </div>
            <div class="form-group mt-3">
                <label for="calling" class="form-label">Calling</label>
                <input type="text" name="calling" class="form-control" id="calling" placeholder="Enter calling details" required>
            </div>
            <div class="form-group mt-3">
                <label for="work" class="form-label">Work</label>
                <input type="text" name="work" class="form-control" id="work" placeholder="Enter work details" required>
            </div>
            <div class="form-group mt-3">
                <label for="suggestion" class="form-label">Suggestion</label>
                <input type="text" name="suggestion" class="form-control" id="suggestion" placeholder="Enter suggestion details" required>
            </div>
            <div class="form-group mt-3">
                <label for="enhancedsecurity" class="form-label">Enhanced Security</label>
                <input type="text" name="enhancedsecurity" class="form-control" id="enhancedsecurity" placeholder="Enter security details" required>
            </div>
            <button type="submit" class="btn btn-success mt-3 w-100">Submit</button>
        </form>
    </div>
</div>


@endsection