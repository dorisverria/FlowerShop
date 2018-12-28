<?php

namespace App;

// Cart Model that implements the basic functionalities of a shopping cart.

class Cart {
    public $items = null;               // array variable that stores the items in the cart
    public $totalQuantity = 0;          // variable that stores the total number of items in the cart
    public $totalPrice = 0;            // variable that stores the total price in the cart

    public function __construct($oldCart) {     // constructor of the class taking a parameter of type Cart representing the most current cart of the user before adding another item
      if($oldCart) {                            // initialilze $oldCart properties to current session's cart ones
        $this->items = $oldCart->items;
        $this->totalQuantity = $oldCart->totalQuantity;
        $this->totalPrice = $oldCart->totalPrice;
      }
    }

    public function add($item, $id, $discount) {    // function that adds item in the cart
        $storedItem = [ 'quantity' => 0, 'price' => $item->price, 'item' => $item];   // variable representing a group of the current item being stored in the cart.
        if ($this->items) {   // if cart not empty
          if(array_key_exists($id, $this->items)) {   // checks if item with the passed id exists in cart
            $storedItem = $this->items[$id];    // assigns the product currently being stored in cart to the product with the passed id
          }
        }
        $storedItem['quantity']++;  // increments quantity of the item
        $storedItem['price'] = ($item->price - $discount*$item->price) * $storedItem['quantity']; // discount logic. discount is 0 if passed from catalogue page, random number if passed from get-lucky page
        $this->items[$id] = $storedItem;  // adds current product to the cart items array
        $this->totalQuantity++; // increments quantity of products in cart
        $this->totalPrice += $item->price - $discount*$item->price; // increments total price using discount logic
    }

    public function has($id) {    // function to check if cart has item with specified id
      if(array_key_exists($id, $this->items))
      {
        return true;
      }
      else
        return false;
    }
}
