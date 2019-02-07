<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class ProductController extends Controller
{

  public function index()
  {
      return Product::all();
  }

  public function show(Product $product)
  {
      return $product;
  }

  public function store(Request $request)
  {
      $product = Product::create($request->all());
      return response()->json($product, 201);
  }

  public function update(Request $request, Product $product)
  {
      $product->update($request->all());
      return response()->json($article, 200);
  }

  public function delete(Request $request, Product $product)
  {
      $product->delete();
      return 204;
  }

  public function userProducts($userid)
  {
      return Product::where('user_id', $userid)->get();
  }

}
