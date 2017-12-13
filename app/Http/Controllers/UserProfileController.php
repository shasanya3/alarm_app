<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;

class UserProfileController extends Controller
{
    public function index(User $user)
    {
      $user->load('orders.products');
      return view('profile.index', compact('user'));
    }

}
