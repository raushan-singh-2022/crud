<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json([
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'old_price' => 'required',
        ]);

        // create product
        $product = new Product;
        $product->image = $request->image;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->description = $request->description;

        $product->save();

        return response()->json([
            'product' => $product
        ], 201);
    }

    public function update(Request $request, $id)
    {
        // validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'old_price' => 'required',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        $product->image = $request->image;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->description = $request->description;

        $product->save();

        return response()->json([
            'product' => $product
        ]);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product deleted'
        ]);
    }
}

