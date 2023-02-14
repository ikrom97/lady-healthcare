<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prescription;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home()
  {
    return view('pages.home');
  }

  public function about()
  {
    return view('pages.about');
  }

  public function career()
  {
    return view('pages.career');
  }

  public function products()
  {
    $data['tags'] = Tag::where('shown', true)->take(4)->get();
    $data['prescriptions'] = Prescription::orderBy('title')->get();
    $data['categories'] = Category::orderBy('title')->get();

    return view('pages.products', compact('data'));
  }

  public function productsSelected($slug)
  {
    $product = Product::where('slug', $slug)->first();

    return view('pages.products-selected', compact('product'));
  }

  public function contacts()
  {
    return view('pages.contacts');
  }
}
