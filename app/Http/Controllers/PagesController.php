<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
  public function index(){
    $alarms = Product::all();
    return view('pages.index',compact('alarms'));
  }
}
