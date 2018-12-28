@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
<h4>Enter a promo code below to win 20% off on some of our products</h4>
@if(count($errors) > 0)
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
</div>
@endif
@if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif
<form action="{{route('product.promoCode')}}" method="post">
  <div class="form group">
    <label for="promo">Promo Code:</label>
    <input type="text" id="promo" name="promo" class="form-control">
  </div>
        {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
