<?php

namespace App\Http\Controllers\Admin;

use App\Action\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function active(Product $product)
    {
        // return "Ac";
        $product->status = true;
        $product->save();

        session()->flash('success', 'Product Activeted Successfully!');
        return redirect()->route('admin.product.index');
    }
    public function inActive(Product $product)
    {
        $product->status = false;
        $product->save();

        session()->flash('success', 'Product inActive Successfully!');
        return redirect()->route('admin.product.index');
    }
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('backend.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::latest()->get();
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();
        return view('backend.product.create', compact('categories', 'colors', 'sizes'));
    }
    public function view(Product $slug)
    {

        $product = $slug->load('category', 'color', 'size', 'sliders', 'sub_category');
        return view('backend.product.view', compact('product'));
    }
    public function edit(Product $product)
    {

        $product = $product->load('category', 'size', 'color', 'sub_category', 'sliders');
        $categories = Category::latest()->get();
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();
        return view('backend.product.edit', compact('product', 'categories', 'colors', 'sizes'));
    }
   
    public function categories($id)
    {
        $data = Category::find($id)->sub_categories;
        return response()->json([
            'data' => $data
        ]);
    }

   

   
}