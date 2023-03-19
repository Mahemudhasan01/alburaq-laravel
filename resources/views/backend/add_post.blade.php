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

                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select name="category" class="form-control">
                                <option value="" selected> Select Category</option>
                                @foreach ($categorys as $item)
                                    <option value="{{ $item->id }}"> {{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product image</label>
                            <input type="file" name="fileToUpload" required>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                    </form>
                    <!--/Form -->
                </div>
            </div>
        </div>
    </div>
@endsection
