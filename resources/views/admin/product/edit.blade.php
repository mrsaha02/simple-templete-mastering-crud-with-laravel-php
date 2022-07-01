@extends('admin.master')

@section('title')
    Edit Product
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center ">Edit Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('update-product', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{ $product->name }}" name="name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{ $product->category_name }}" name="category_name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{ $product->brand_name }}" name="brand_name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Description </label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Image </label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{asset($product->image)}}" style="height: 100px; width: 100px" alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" {{ $product->status == '1' ? 'checked' : '' }} value="1">Published</label>
                                <label for=""><input type="radio" name="status" {{ $product->status == '0' ? 'checked' : '' }} value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" value="Update Product" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
