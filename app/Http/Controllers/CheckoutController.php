<?php

namespace App\Http\Controllers;
use Auth;
use App\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
  public function shipping()
  {
    return view('front.shipping-info');
  }

  public function payment()
    {
      return view('front.payment');
    }

  public function storePayment(Request $request)
   {

 // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_50IDFOBcbnNh9HoAlIpGxqgE");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
 $token = $request->stripeToken;

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
 "amount" => Cart::total()*100,
 "currency" => "usd",
 "description" => "Example charge",
 "source" => $token,
));

 order::createOrder();
   }


}
