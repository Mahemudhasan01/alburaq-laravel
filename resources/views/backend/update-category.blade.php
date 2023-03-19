@extends('backend-layouts.main')

@section('main-backend-container')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="adin-heading"> Update Category</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <form action="{{ route('update.category') }}" method="POST">
                        @csrf
                        @foreach ($category as $item)
                        <input type="hidden" name="id"  value="{{$item->id}}" >
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category" class="form-control" value="{{$item->category_name}}" placeholder="Category Name"
                                    required>
                                @error('category')
                                    <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control"  name="gender">
                                    <option value="{{$item->gender}}"><b>{{$item->gender}}</b></option>
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
                                    <strong><option value="{{$item->is_luxury}}">{{$item->is_luxury}}</option></strong>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                                @error('luxsury')
                                    <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach
                        <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
