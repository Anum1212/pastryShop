<div class="d-none d-md-block">
  <nav class="navbar navbar-expand-md navbar-dark">
  
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home </a>
        </li>
        @if (Auth::guest())
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @else
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Account</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('cart.view') }}">Cart</a>
          </li>
          @endif
      </ul>
    </div>
  </nav>
  <div id="logo" class="text-center">
    <img src="{{asset('/storage/myAssets/logo2.png')}}" alt="">
  </div>
</div>

<div class="d-sm-none">
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="/">PastryLove</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
          <a class="nav-link" href="/">Home </a>
        </li>
        @if (Auth::guest())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cart.view') }}">Cart</a>
          </li>
          @endif
    </ul>
  </div>
</nav>
</div>