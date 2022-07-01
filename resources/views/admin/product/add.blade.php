@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center ">Add Product</h4>
                </div>
                <span class="text-center text-success">{{ Session::has('message')? Session::get('message'):''}}</span>
                <div class="card-body">
                    <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="category_name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="brand_name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Description </label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Image </label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1">Published</label>
                                <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" value="Add Product" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
