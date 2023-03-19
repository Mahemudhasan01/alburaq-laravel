@extends('backend-layouts.main')

@section('main-backend-container')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Categories</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href="{{ Route('view.add.category') }}">add category</a>
                </div>

                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Category Name</th>
                            <th>No. of Product</th>
                            <th>Gender</th>
                            <th>Luxury</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $item)
                                <tr>

                                    <td class='id'> @php
                                        $count++;
                                        print $count;
                                    @endphp </td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>1</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->is_luxury }}</td>
                                    <td class='edit'><a href='{{ route('view.edit.category', ['id' => $item->id]) }}'><i
                                                class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='{{ route('delete.category', ['id' => $item->id]) }}'><i
                                                class='fa fa-trash-o'></i></a>
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
