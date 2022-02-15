<!-- KD CODE-->
<div class="container-fluid topbar d-none d-md-block py-2">
    <div class="row ">
        <div class="col-12 col-md-8 ">
            <div class="d-flex">
                <p class="px-2"><i class="far fa-envelope"></i> support@beekeeper-suit.com</p>
                <p class="px-2 float-right"><i class="fab fa-whatsapp"></i> +123 456 7890</p>
                <p class="px-2 float-right"> <a href="{{ route('cart.list') }}" class="flex items-center text-light">
                    <div style="width: 20px">
                        <svg class="w-5 h-5 text-light"  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    
                    {{  Cart::getTotalQuantity()}}
                </a></p>
            </div>
        </div>
        <div class="col-md-4  d-none d-sm-block">
            <div class="d-flex float-right">
                <p class="px-2"><i class="fab fa-facebook-f"></i></p>
                <p class="px-2"><i class="fab fa-twitter"></i></p>
                <p class="px-2"><i class="fab fa-linkedin"></i></p>
                <p class="px-2"><i class="fab fa-youtube"></i></p>
                <p class="px-2"><i class="fab fa-pinterest"></i></p>
                <p class="px-2"><i class="fas fa-rss"></i></p>
            </div>
        </div>
    </div>
</div>



<nav class="d-flex">

    <div class="col-6 offset-4">
    <a href="{{"/"}}" class="navbar-brand " id="navbar-heading"><img src="/assests/images/logo.jpeg" class=" logo mr-2 img-fluid img-responsive">  </a>
    </div>
          <div class="col-2">
          <button class="navbar-toggler float-right" data-toggle="collapse" data-target="#mynavbar">
          <i class="fas fa-bars"></i>
                </button>
          </div>          
                  
</nav>


<div class="fluid-container header">
    <div class="row adjustRow">
        <div class="col-md-12 menubar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbarr" >

                
                
                <div class="collapse navbar-collapse " id="mynavbar">
                    <ul class="navbar-nav mx-auto px-3" >
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link " id="menu-buttons">Home</a></li>
                        <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Ventilated Bee Suits</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="{{route('categoryProducts',['cat_id'=>1,'type_id'=>1])}}" class="dropdown-item">3-Layer Ventilated Beesuit</a>
                                <a href="{{route('categoryProducts',['cat_id'=>1,'type_id'=>2])}}" class="dropdown-item">Extra Breeze Ventilated</a>
                                {{-- <a href="{{route('categoryProducts',['cat_id'=>1,'type_id'=>2])}}" class="dropdown-item">Ventilated Bee Jacket</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" id="menu-buttons" aria-haspopup="true" aria-expanded="false">BeeKeeping Suits</a>
                            <div class="dropdown-menu">
                                <a href="{{route('categoryProducts',['cat_id'=>2,'type_id'=>3])}}" class="dropdown-item">100% Organic Cotton Beesuit</a>
                                <a href="{{route('categoryProducts',['cat_id'=>2,'type_id'=>4])}}" class="dropdown-item">Fencing Veil</a>
                                <a href="{{route('categoryProducts',['cat_id'=>2,'type_id'=>5])}}" class="dropdown-item">Round Veil</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" id="menu-buttons" aria-haspopup="true" aria-expanded="false">Beekeeping Jackets</a>
                            <div class="dropdown-menu">
                                <a href="{{route('categoryProducts',['cat_id'=>3,'type_id'=>7])}}" class="dropdown-item">100% Organic Cotton</a>
                                <a href="{{route('categoryProducts',['cat_id'=>3,'type_id'=>8])}}" class="dropdown-item">Bee Jacket</a>
                                <a href="{{route('categoryProducts',['cat_id'=>3,'type_id'=>9])}}" class="dropdown-item">Cotton/Polyster Bee Jacket</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" id="menu-buttons" aria-haspopup="true" aria-expanded="false">Beekeeping Gloves</a>
                            <div class="dropdown-menu">
                                <a href="{{route('categoryProducts',['cat_id'=>4,'type_id'=>9])}}" class="dropdown-item">Goat Skin Bee Gloves</a>
                                <a href="{{route('categoryProducts',['cat_id'=>4,'type_id'=>10])}}" class="dropdown-item">Cowhide Bee Gloves</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="{{route('categoryProduct',['cat_id'=>5])}}" class="nav-link " id="menu-buttons">Smart Apiculture</a></li>
                        <li class="nav-item"><a href="{{route('categoryProduct',['cat_id'=>6])}}" class="nav-link " id="menu-buttons">Bekeeping For Kids</a></li>
                        @if (Auth::check())

                        <li class="nav-item">  <a class="nav-link " id="menu-buttons" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         LogOut
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                       </li>
                        @else
                        
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link " id="menu-buttons">LogIn</a></li>
                        @endif
                        {{-- <li class="nav-item"><a href="#" class="nav-link " id="menu-buttons">About Us</a></li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>














