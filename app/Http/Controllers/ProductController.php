<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProduct()
    {
        $show_products = Product::all();
        return view('/product/products', compact('show_products'));

        // return $show_products;


        // $product->name = $request->name; // we use this for fillable in previous project//

        // $product = $request->fill();
    }

    public function loadProduct()
    {
        return view('product.add-product');
    }

    // public function AddProduct(Request $request)
    // {
    //     $product = new Product();
    //     $product->fill($request->all());


    //     $product->save();


    //     return redirect('products');
    // }

    public function store(Request $request)
    {


        Product::create([
            'product_name' => $request->product_name,
            'description'  => $request->description,
            'type' => $request->type,
            'price' => $request->price,
        ]);



        return redirect()->route('show.products');
    }

    public function editProduct($pid, Request $request)
    {
        $product = Product::find($pid)->where('product_id', $request->id);
        return view('product.edit-product', compact('product'));
    }

    public function updateProduct(Request $request)
    {
        Product::where('id', $request->id)->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'type' => $request->type,
            'price' => $request->price
        ]);
        return redirect('products')->with('Product successfully Updated');
    }

    // public function deleteProduct($id)
    // {
    //     Product::where('id', $id)->delete();
    //     return redirect('products')->with('Successfully Deleted');
    // }
}
