<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('member')->latest()->simplePaginate(10);
        return view('products.index' , ['products' => $products]);
    }
    public function show($id){
        $products=product::find($id);
        return view('products.show' , ['product' =>$products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(CreateProductRequest $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/products');
        
            Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'image' => $imagePath,
                'member_id' =>2
            ]);
        }

        return redirect()->route('products.index');
    }

}
