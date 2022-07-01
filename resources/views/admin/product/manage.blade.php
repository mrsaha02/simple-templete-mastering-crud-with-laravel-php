@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <div class="row mt-3 bg-secondary">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Product</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="" style="height: 150px; width: 150px">
                                </td>
                                <td>{{ $product->status == 1 ? 'Published':'Unpublished' }}</td>
                                <td>
{{--                                    <a href="" class="btn btn-secondary btn-sm">Edit</a>--}}
                                    <a href="{{ route('edit-product', ['id'=>$product->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="{{ route('delete-product', ['id'=>$product->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-secondary btn-sm">Del</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
