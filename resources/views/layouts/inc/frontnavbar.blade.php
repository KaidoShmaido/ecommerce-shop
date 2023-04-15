

<nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">Maxim E-shop</a>
<div class="search-bar">
  
  <form action="{{url('Searchproduct')}}" method="GET">
      <div class="input-group">
        <input type="text" class="form-control" id="search_product" name="product_name" placeholder="search for a product" aria-label="Username" aria-describedby="basic-addon1">
        <button  type="submit" class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></button>
      </div>
  </form>
 
</div>
      



      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('category') }}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cart') }}">Cart
                <span class="badge badge-pill bg-danger cart-count">0</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('wishlist') }}">Wishlist
                <span class="badge badge-pill bg-success wishlist-count">0</span>
            </a>
          </li>
          @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}

                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li>
                          <a class="dropdown-item" href="#">My Profile</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{url('/my-orders')}}">My Orders</a>
                    </li>
                      <li>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout</a>
                                   
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                      </li>
         
                  </ul>
          </div>
        
      @endguest
        </ul>
      </div>
    </div>
  </nav>


 