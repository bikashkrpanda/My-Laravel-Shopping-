<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('product.index')}}">My Laravel Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('product.shoppingcart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shooping Cart <span class="badge btn btn-success" style="">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
      </li>
      @if(Auth::check())
      <li class="">
        <a class="" href="{{route('user.profile')}}"></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link pull-left" href="{{route('user.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>
      </li>

      @else
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.signin')}}"><i class="fa fa-sign-in" aria-hidden="true"> Login</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.signup')}}"><i class="fa fa-user-plus" aria-hidden="true"> Signup</i></a>
      </li>
      @endif
      
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>