@extends('admin.template')

@section('content')
    <mt-4>
        <form action="{{ route('blog.adds.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <!-- First Column -->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" id="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="profile" class="form-label">Profile</label>
                            <input type="file" class="form-control" name="profile" id="profile" required>
                        </div>
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <textarea class="form-control" name="heading" id="heading" required cols="3"></textarea>
                        </div>
                    </div>
                    <!-- Full-width Descriptions -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description1" class="form-label">Description 1</label>
                            <textarea id="ckbox" class="form-control" name="description1"></textarea>
                        </div>
                        
                      
                        
                        <div class="mb-3">
                            <label for="description2" class="form-label">Description 2</label>
                            <textarea class="form-control" name="description2" id="description2" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description3" class="form-label">Description 3</label>
                            <textarea class="form-control" name="description3" id="description3" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Blog</button>
            </div>
        </form>
    </mt-4>
@endsection

