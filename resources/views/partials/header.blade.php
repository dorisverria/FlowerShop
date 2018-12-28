<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('splash')}}">Brand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('product.index')}}">Catalogue <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.getLucky')}}">Get Lucky</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.promoCode')}}">Promotion Codes</a>
    </ul>
    <ul class="navbar-nav mr-4">
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('product.shoppingCart')}}"><i class="fas fa-shopping-cart"></i>
        <span class="badge">({{ Session::has('cart') ? Session::get('cart')->totalQuantity : ''}})</span>
         Check Out</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
            <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
          @else
            <a class="dropdown-item" href="{{route('user.signin')}}">Login</a>
            <a class="dropdown-item" href="{{route('user.signup')}}">Signup</a>
          @endif
      </li>
  </div>
</nav>
