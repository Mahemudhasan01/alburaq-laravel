@extends('backend-layouts.main')

@section('main-backend-container')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="admin-heading">Add New Product</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form -->
                    <form action=" {{ route('add.product') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="post_title">Title</label>
                            <input type="text" name="product_name" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description</label>
                            <textarea name="postdesc" class="form-control" rows="2" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="post_title">Selling Price</label>
                            <input type="text" name="price" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="post_title">Orignal Price</label>
                            <input type="text" name="orignal_price" class="form-control" autocomplete="off" required>
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select name="category" class="form-control">
                                <option value="" selected> Select Category</option>
                                @foreach ($categorys as $item)
                                    <option value="{{ $item->id }}"> {{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        {{-- <div class="form-group">
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
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Is Luxsury</label>
                            <select class="form-control" name="luxsury">
                                <option value="">Is Luxsury</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            @error('luxsury')
                                <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Trending Product</label>
                            <select class="form-control" name="trending">
                                <option value="">Select Trending</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            @error('trending')
                                <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Special Offer</label>
                            <select class="form-control" name="special">
                                <option value="">Select Special Offer</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            @error('special')
                                <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        {{-- New Drop-box selction --}}

                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <select name="category" class="form-control">
                                        <option value="" selected> Select Category</option>
                                        @foreach ($categorys as $item)
                                            <option value="{{ $item->id }}"> {{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
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
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Is Luxsury</label>
                                    <select class="form-control" name="luxury">
                                        <option value="">Is Luxsury</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                    @error('luxsury')
                                        <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Trending Product</label>
                                    <select class="form-control" name="trending">
                                        <option value="">Select Trending</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @error('trending')
                                        <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <label>Special Offer</label>
                                    <select class="form-control" name="special">
                                        <option value="">Select Special Offer</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @error('special')
                                        <span style="color: red; margin-left:0%; font-weight: bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Drop selection --}}

                        {{-- File Selection --}}
                        <div class="row justify-content-between">
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Front-Side image</label>
                                    <input type="file" name="front_side_img" multiple>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Right-Side image</label>
                                    <input type="file" name="right_side_img" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Back-Side image</label>
                                    <input type="file" name="back_side_img" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-5">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Up-Side image</label>
                                    <input type="file" name="up_side_img" required>
                                </div>
                            </div>
                        </div>
                        {{-- End File Selection --}}
                        <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                    </form>
                    <!--/Form -->
                </div>
            </div>
        </div>
    </div>
@endsection
