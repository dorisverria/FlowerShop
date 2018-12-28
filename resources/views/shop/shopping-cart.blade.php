@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
  @if(Session::has('cart'))
    <div class="row">
      <div class="col-md-6 m-auto">
        <ul class="list-group">
          @foreach($products as $product)
              <li class="list-group-item">
                <span class="badge">({{ $product['quantity'] }})</span>
                <strong>{{ $product['item']['name'] }}</strong>
                <span class="label label-success">${{ $product['price'] }}</span>
              </li>
          @endforeach
        </ul>
      </div>
    </div>
        @if(session()->has('promoAmount') && session('promoAmount') > 0)
    <div class="row">
      <div class="col-md-6 m-auto promodiscount">
        <strong>  Discount from Promotion Code: ${{ session()->get('promoAmount') }}</strong>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 m-auto">
        <strong>  Total: ${{ $totalPrice - session()->get('promoAmount')  }}</strong>
      </div>
    </div>
      @elseif(session()->has('promoAmount') && session('promoAmount') == 0)
      <div class="row">
        <div class="col-md-6 m-auto">
          <strong>  Total: ${{ $totalPrice - session()->get('promoAmount')  }}</strong>
        </div>
      </div>
      <div class="alert alert-danger">You have not selected the item the promotion code is available for</div>
      @else
    <div class="row">
      <div class="col-md-6 m-auto">
        <strong>Total: ${{ $totalPrice }}</strong>
      </div>
    </div>
    <hr>
      @endif
      <div class="row">
          <div class="col-md-6 m-auto">
            <a href="{{ route('checkout')}} " type="button" cls="btn btn-success">Checkout</button>
          </div>
        </div>
  @else
  <div class="row">
      <div class="col-md-6 m-auto">
        <h2>No Items in Cart</h2>
      </div>
    </div>
  @endif
@endsection
