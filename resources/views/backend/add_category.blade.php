@extends('backend-layouts.main')

@section('main-backend-container')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="admin-heading">Add New Category</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form Start -->
                    <form action="{{ route('add.new.category') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category" class="form-control" placeholder="Category Name" required>
                            @error('category')
                                <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Unisex">Unisex</option>
                            </select>
                            @error('gender')
                                <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Is Luxsury</label>
                            <select class="form-control" name="luxsury">
                                <option value="">Is Luxsury</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            @error('luxsury')
                                <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                    </form>
                    <!-- /Form End -->
                </div>
            </div>
        </div>
    </div>
@endsection
