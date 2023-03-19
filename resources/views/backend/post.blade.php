@extends('backend-layouts.main')

@section('main-backend-container')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Products</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href="{{ route('insert.product') }}">add Products</a>
                </div>
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                            <th>P.No.</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Orignal Price</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td class='id'>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{-- <td>{{ $item->img }}</td> --}}
                                    <td style="margin:0px"> <img src="{{ asset('uploads/products/' . $item->img) }}"
                                            height="50px" width="50px"> </td>
                                    <td>
                                        @php
                                            $cat_name = DB::table('categorys')->where('id', '=', $item->category)->first('category_name');
                                            print($cat_name->category_name);
                                        @endphp
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->orignal_price }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td class='edit'><a href='{{ route('update.product', ['id' => $item->id]) }}'><i
                                                class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='{{ route('delete.product', ['id' => $item->id]) }}'><i
                                                class='fa fa-trash-o'></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class='pagination admin-pagination'>
                        <li class="active"><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
