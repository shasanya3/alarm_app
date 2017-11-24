<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
  public function alarm()
 {
   $alarms = Product::all();
   return view('front.alarm', compact('alarms'));
 }
}
