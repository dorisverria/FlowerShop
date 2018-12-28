<?php

namespace App\Http\Controllers;

// Product Controller dealing with functions related to product operations

use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;



class ProductController extends Controller{

    public function getAllProducts() {      // function to display all products in the catalogue page
        $products = Product::all();         // variable of type Collection of Models that retrieves all Product models from database (Eloquent method)
        return view('shop.index', ['products' => $products]);   // returns catalogue view and passes the Collection variable as a parameter together with the request
    }

    public function getRandomProducts() {       // function to get random products from the database
        $productsArray = DB::select('SELECT * FROM products ORDER BY RAND() LIMIT 5');    // get random products via sql query from the database and store them in an array variable
        $products = Product::hydrate($productsArray);       // convert the array to Collection via Eloquent's hydrate() method
        return view('shop.get-lucky', ['products' => $products]);       // returns get-lucky page and passes the Collection variable as a parameter together with the request
    }

    public function checkoutProducts(Request $request) {   // function that returns the view to checkout
      if(!$request->session()->has('cart'))
        return view('shop.shopping-cart');
        $request->session()->forget('cart');    // empty cart
        return view('shop.checkout');
    }

    public function getPromoCode() {
        return view('promos.promotion-codes');    // returns empty promotion-code field
    }

    public function postPromoCode(Request $request) {
        $discountIndex = 0;
        $discountAmount = 0;
        $validator = Validator::make($request->all(), [   // validates promotion-code field
           'promo' => 'required',
         ]);

      if ($validator->fails()) {
        return redirect()->back()->withInput()->with('message', 'Please enter a code');   // if validation not successful redirect back with old input and failure message
      }
        $promoCodes = array(    // associative array that maps promotion codes to product indexes arbitrarily chosen
          4 => "LILIES20",
          6 => "ROSES365",
          9 => "PEACOCK"
        );
        foreach($promoCodes as $key => $val)    // loop to check if promo code entered by the user is in the array
        {
          if($val == $request->input('promo'))
          {
            $discountIndex = $key;    // stores the matching index
            break;
          }
        }
        if($discountIndex == 0) {
          return redirect()->back()->withInput()->with('message', 'Invalid Code!');   // if index not part of array redirect back with old input and failure message
        }
        else {
          if(request()->session()->has('cart') && $request->session()->has($discountIndex))   // checks if the session has cart stored and this cart has an item with id equal to the index returned above
            $discountAmount = 0.8 * Product::find($discountIndex)->price;   // makes discount calculation (-20%)
            return redirect()->route('product.shoppingCart')->with(['promoAmount' => $discountAmount]);   // redirect to shopping-cart page and store promotion amount as a session variable
      }
    }

    public function getCart(Request $request) {   // function that returns the view to the shopping cart
      if(!$request->session()->has('cart'))   // checks if session has cart stored
        return view('shop.shopping-cart');
      $oldCart = $request->session()->get('cart');    // if session has cart stored
      $cart = new Cart($oldCart);   // initialize new Cart object to most current cart
      return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]); // return shopping-cart view and pass the current cart items and totalPrice as parameters
    }

    public function AddProductToCart(Request $request, $id, $discount) {    // function that adds item to cart. Receives an $id and $discount parameters besides the browser's request
      if(Product::find($id))    // if there is a product item with the passed id
      {
        $product = Product::find($id);    // fetches item with matching id from database
        $oldCart = $request->session('cart') ? $request->session()->get('cart') : null;   // initializes cart object to most current cart stored in session if it exists, if not initialize cart to null
        $cart = new Cart($oldCart);    // create new cart Object
        $cart->add($product, $product->id, $discount);  // call Cart's add() method and pass the $product object, its id, and discount

      $request->session()->put('cart', $cart);    // store updated cart in session
    }
      return redirect()->back();    // if product not found redirect back
    }

}
