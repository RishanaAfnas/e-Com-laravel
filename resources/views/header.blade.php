@php
    use App\Http\Controllers\ProductController;
    $total=0;
   if(Session::has('user')){
    $total=ProductController::cartItem();

   }

    
@endphp

<nav class="navbar navbar-expand-lg bg-dark navbar-dark nav-text ">
    <div class="container-fluid ">
      <a class="navbar-brand brand text-primary" href="#">Brands</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse tt  " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active links" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="#">Orders</a>
          </li>
          
        </ul>
        <form class="d-flex find"  role="search" action="/search">
          <input class="form-control me-2 search-box" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary " type="submit">Search</button>
        </form>
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active  " aria-current="page" href="#">Cart({{$total}})</a>
          </li>
          @if(Session::has('user'))
          <li class="nav-item dropdown drop">
            <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
              
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link active  " aria-current="page" href="/login">Login</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>