<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;

    public function addProduct()
    {
        return view('admin.product.add');
    }
    public function manage()
    {
        return view('admin.product.manage',[
             'products' => Product::orderBy('id','DESC')->get(),
        ]);
    }
    public function newProduct (Request $request)
    {
        Product::newProduct($request);
        return back()->with('message','Product created successfully');
    }
    public function deleteProduct($id)
    {
        $this->product = Product::where('id', $id)->first();
        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    public function editProduct($id)
    {
        return view('admin.product.edit',[
            'product' => Product::find($id),
        ]);
    }
    public function updateProduct(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product');

    }
}
