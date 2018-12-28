<!DOCTYPE html>
<html>
<head>
<title> Welcome to Our Florist Shop </title>
  <link rel="stylesheet" href="{{ URL::to('css/splash.css')}}">
</head>
<body>
<div class="bg-image"></div>
<h1> Welcome to Basket of Flower </h1>
<div class=" container">
<button class="btn catalogue" onclick="location.href='{{route('product.index')}}'">Catalogue</button>
<button class="btn lucky" onclick="location.href='{{route('product.getLucky')}}'">Get Lucky</button>
<button class="btn promo" onclick="location.href='{{route('product.promoCode')}}'">Promo Code</button>

</div>
</body>
</html>
