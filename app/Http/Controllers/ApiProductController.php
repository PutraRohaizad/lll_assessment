<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiProductController extends Controller
{
    public function index() 
    {
        return response()->json([
            "success" => true,
            "data" => Product::get()
        ]);  
    }

    public function store(Request $request) 
    {
        $request->validate([
            "name" => "required"
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->save();

        return response()->json([
            "success" => true,
            "data" => $product
        ]);  
    }

    public function update(Product $product,  Request $request) 
    {
        $request->validate([
            "name" => "required"
        ]);

        $product->name = $request->name;
        $product->save();

        return response()->json([
            "success" => true,
            "data" => $product
        ]);  
    }

    public function destroy($product) 
    {
        $product = Product::find($product);
        if(!isset($product)){
            throw new NotFoundHttpException('Product not found');
        }
        $product->delete();
        return response()->json([
            "success" => true,
            "is_deleted" => true
        ]);  
    }
}
