<div id = 'app'>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/main">Sunsilver's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/main">Home
            </a>
          </li>
          <li class="nav-item">
            @guest
            <a class="nav-link" href="{{route('login')}}">Login</a>
            @else
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
            @endguest
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Join</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.shoppingCart')}}">Cart
              <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('board/board/board')}}">Community</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>