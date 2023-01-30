<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function main()
  {
    $GLOBALS['products'] = Product::orderBy('views', 'desc')->take(4)->get();

    return view('pages.main');
  }

  public function about()
  {
    return view('pages.about');
  }

  public function career()
  {
    return view('pages.career');
  }

  public function drugs()
  {
    return view('pages.drugs');
  }

  public function drugsSelected(Request $request)
  {
    return view('pages.drugs-selected');
  }

  public function contacts()
  {
    return view('pages.contacts');
  }
}
