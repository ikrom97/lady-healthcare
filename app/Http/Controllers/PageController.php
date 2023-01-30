<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function main()
  {
    if (isMobile()) {
      $GLOBALS['products'] = Product::orderBy('views', 'desc')->take(4)->get();
    }

    if (isTablet()) {
      $GLOBALS['products'] = Product::orderBy('views', 'desc')->take(6)->get();
    }

    if (isDesktop()) {
      $GLOBALS['products'] = Product::orderBy('views', 'desc')->take(12)->get();
    }

    if (isFullHd()) {
      $GLOBALS['products'] = Product::orderBy('views', 'desc')->take(18)->get();
    }

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
