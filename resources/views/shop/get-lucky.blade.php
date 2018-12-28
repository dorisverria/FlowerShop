@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
@php
$randomDiscount=rand(5,21)/100;
@endphp
@foreach($products->chunk(3) as $productChunk)
  <br>
  <div class="row">
    @foreach($productChunk as $product)
      <div class="col-sm-4">
        <div class="card h-100" style="width: 18rem;">
          <img class="card-img-top img-responsive" src="{{$product->imagePath}}">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text description">{{$product->description}}</p>
            <div class="float-left price"><strike>${{$product->price}}</strike></div>
            <br>
            <div class="float-left discountprice"> ${{$product->price - $randomDiscount * $product->price}}</div>
            <a href="{{route('product.addToCart', ['id' => $product->id, 'discount' => $randomDiscount])}}" class="btn btn-success float-right">Add to Cart</a>
          </div>
        </div>
      </div>
      <br>
      @endforeach
    </div>
    @endforeach
@endsection
