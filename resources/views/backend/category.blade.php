@extends('backend-layouts.main')

@section('main-backend-container')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Categories</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href=" {{ route('add.category') }} ">add category</a>
                </div>

                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Category Name</th>
                            <th>No. of Posts</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $item)
                                <tr>
                                    <td class='id'>{{ $item->id }}</td>
                                    <td>{{ $item->cat_name }}</td>
                                    <td>{{ $item->post }}</td>
                                    <td class='edit'><a href='{{ route('edit.category', ['id' => $item->id]) }}'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='{{ route('delete.category', ['id' => $item->id]) }}'><i class='fa fa-trash-o'></i></a>
                                    </td>

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
