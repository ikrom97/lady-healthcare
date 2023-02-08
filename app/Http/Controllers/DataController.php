<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DataController extends Controller
{
  public function products()
  {
    $quantity = request('quantity');

    if ($quantity) {
      $products = Product::orderBy('views', 'desc')->take($quantity)->get();

      return view('templates.products', compact('products'))->render();
    }
  }
}
