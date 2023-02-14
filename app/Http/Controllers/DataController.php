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

  public function productsFilter()
  {
    $products = Product::orderBy('views', 'desc');

    if (request('tag_id')) {
        $tag_id = request('tag_id');

        $products = $products->whereHas('tags', function ($query) use ($tag_id) {
          $query->where('id', $tag_id);
        });
    }

    if (request('keyword')) {
      $products = $products
        ->where('title', 'like', '%' . request('keyword') . '%')
        ->orWhere('description', 'like', '%' . request('keyword') . '%');
    }

    if (request('prescription_id')) {
      $products = $products->where('prescription_id', request('prescription_id'));
    }

    if (request('category_id')) {
      $products = $products->where('category_id', request('category_id'));
    }

    $products = $products->paginate(request('quantity'));

    return view('templates.products', compact('products'))->render();
  }
}
