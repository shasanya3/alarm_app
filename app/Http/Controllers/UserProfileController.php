<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\category;

class UserProfileController extends Controller
{
    public function index(User $user)
    {
      $user->load('orders.products');
      $categories=Category::all();
      return view('profile.index', compact('user', 'categories'));
    }

}
