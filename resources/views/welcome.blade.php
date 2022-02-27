
@extends('layouts.master')

@section('title') Home @endsection
@push('css')
<link rel='stylesheet' href='{{ asset('assests/css/rating.css') }}'>
<style>

.items {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.owl-nav{
  display: none;
}
.owl-dots{
  display: none;
}
.thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}
.items .product-img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.items .img-box {
height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
</style>
@endpush
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assests/images/sliders/ImageSlider/image1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assests/images/sliders/ImageSlider/image2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assests/images/sliders/ImageSlider/image3.png" alt="Third slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100 " src="assests/images/sliders/image4.png" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container py-3">
  <div class="row">
  <h5 class="text-center"><b>Services</b></h5>
    <div class="col-12 col-md-6 col-lg-3 py-3 px-3">
      <div class="d-flex brand-info px-3">
        <div>
          <i class="fas fa-xl fa-hand-holding-usd" style="line-height: 2.04167em;font-size: 2.5em;"></i>
        </div>
        <div class="py-3 px-1">
          <b>30 Days Return</b><br>
          <small>Money Back Gurrantee</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 py-3 px-3">
      <div class="d-flex brand-info px-3">
        <div>
          <i class="fas fa-xl fa-shipping-fast" style="line-height: 2.04167em;font-size: 2.5em;"></i>
        </div>
        <div class="py-3 px-1">
          <b>Safe Shipping</b><br>
          <small>Gurrantee</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 py-3 px-3">
      <div class="d-flex brand-info px-3">
        <div>
          <i class="fas fa-xl fa-money-bill-alt" style="line-height: 2.04167em;font-size: 2.5em;"></i>
        </div>
        <div class="py-3 px-1">
          <b>Lowest Price</b><br>
          <small>Gurrantee</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 py-3 px-3">
      <div class="d-flex brand-info px-3">
        <div>
          <i class="fa fa-xl fa-shield" style="line-height: 2.04167em;font-size: 2.5em;"></i>
        </div>
        <div class="py-3 px-1">
          <b>Safe Shopping</b><br>
          <small>Gurrantee</small>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- test product card --}}
{{-- <div class="item active">
  <div class="row">
    <div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="1642073255-82.jpg" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>Apple iPad</h4>									
          <div class="star-rating">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>						
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="/examples/images/products/headphone.jpg" class="img-fluid" alt="Headphone">
        </div>
        <div class="thumb-content">
          <h4>Sony Headphone</h4>									
          <div class="star-rating">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>						
      </div>
   
  </div>
</div> --}}
{{-- test product card end--}}
<div class="container">
  <div class="row">
    <div class="col"><img href="{{ asset('assests/images/') }}" /></div>
    <div class="col"><img href="{{ asset('assests/images/') }}" /></div>
    <div class="col"><img href="{{ asset('assests/images/') }}" /></div>
  </div>

  <div class="container">
    <h2 class="text-center font-weight-bold">Products</h2>
    <div class="row row-cols-1 row-cols-md-2">
      <!--tips: use row-cols-md-(X) to control how many of columns to show per row-->
      <!--tips: when you need equal height, add .h-100 to the cards-->
  
      <!--Card1-->
      <div class="col-3 mb-4">
        <div class="card">
          <img src="{{ asset('assests/images/product1.jpg') }}" class="card-img-top" alt="...">
          
            <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
          
            <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
          
        </div>
      </div>
      <!--Card2-->
      <div class="col-3 mb-4">
        <div class="card">
          <img src="{{ asset('assests/images/product2.jpg') }}" class="card-img-top" alt="...">
          
            <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
          
            <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
          
        </div>
      </div>
      <!--Card3-->
      <div class="col-3 mb-4">
        <div class="card">
          <img src="{{ asset('assests/images/product3.jpg') }}" class="card-img-top" alt="...">
          
            <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
          
            <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
          
        </div>
      </div>
      <!--Card4-->
      <div class="col-3 mb-4">
        <div class="card">
          <img src="{{ asset('assests/images/product4.jpg') }}" class="card-img-top" alt="...">
          
            <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
          
            <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
          
        </div>
      </div>
         <!--Card1-->
         <div class="col-3 mb-4">
          <div class="card">
            <img src="{{ asset('assests/images/product5.jpg') }}" class="card-img-top" alt="...">
            
              <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
            
              <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
            
          </div>
        </div>
        <!--Card2-->
        <div class="col-3 mb-4">
          <div class="card">
            <img src="{{ asset('assests/images/product2.jpg') }}" class="card-img-top" alt="...">
            
              <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
            
              <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
            
          </div>
        </div>
        <!--Card3-->
        <div class="col-3 mb-4">
          <div class="card">
            <img src="{{ asset('assests/images/product4.jpg') }}" class="card-img-top" alt="...">
            
              <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
            
              <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
            
          </div>
        </div>
        <!--Card4-->
        <div class="col-3 mb-4">
          <div class="card">
            <img src="{{ asset('assests/images/product1.jpg') }}" class="card-img-top" alt="...">
            
              <h5 class="card-title top text-warning p-2">BeeKeeping</h5>
            
              <p class="card-text bottom text-dark font-weight-bold p-2">Shop Now</p>
            
          </div>
        </div>
    </div>
    
  </div>

  <h5 class="text-center pt-5 font-weight-bold"><b>New Arrivals</b></h5>
  <div class="row px-3">
  <div class="owl-carousel items">
    
      
    @foreach($products as $item)
    
    <div class="item px-2">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="uploads/Products/{{$item->main_image}}" class="img-fluid product-img" alt="">									
        </div>
        <div class="thumb-content">
          <h4> <a href="/product/{{$item->id}}" class="text-decoration-none text-dark">{{$item->title}}</a></h4>									
          <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $item->id }}" name="id">
            <input type="hidden" value="{{ $item->title }}" name="name">
            <input type="hidden" value="{{ $item->price }}" name="price">
            <input type="hidden" value="{{ $item->main_image }}"  name="image">
            <input type="hidden" value="1" name="quantity">
            <button class="btn btn-warning">Add To Cart</button>
        </form>
          <div class="star-rating">
            <ul class="list-inline">
              
             
                @if($item->averageRating>0.0000 && $item->averageRating<=0.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2"><i class="far fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star-half-stroke"></i></label>
              
                @elseif($item->averageRating>=0.5555 && $item->averageRating<=1.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2"><i class="far fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=1.0000 && $item->averageRating<=1.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=1.5555 && $item->averageRating<=2.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=2.0000 && $item->averageRating<=2.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3" ><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=2.5555 && $item->averageRating<=3.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=3.0000 && $item->averageRating<=3.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=3.5555 && $item->averageRating<=4.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"> <i class="fa-solid fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3" > <i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" > <i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" > <i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=4.0000 && $item->averageRating<4.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"  ><i class="fa-solid fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($item->averageRating>=4.5555 && $item->averageRating<5.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5"><i class="fa-solid fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4"  ><i class="fa-solid fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @else
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-5" for="star-5">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-4" for="star-4">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-3" for="star-3">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-2" for="star-2">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <li class="list-inline-item"> <label class="star star-1" for="star-1">
                    <i class="far fa-star"></i>
                </label>
              @endif
              
            </ul>
          </div>
          <p class="item-price"> <b>{{$item->price}}$</b></p>
        </div>						
      </div>
    </div>
    @endforeach

</div>
</div>
</div>
</div>
<section class="space-ptb pt-5">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
              <div class="section-title text-center center">
                  <h2 class="text-center font-weight-bold">Blogs</h2>
                  <p>Data trends and insights, tips for employers, product updates and best practices</p>
              </div>
          </div>
      </div>
      <div class="row items" >
        @foreach($blogs as $item)
          <div class="col-md-4 mb-md-0 mb-4 ">
              <div class="blog-post justify-content-center text-center ">
                  <div class="blog-post-image pb-5 img-box" style="height: 165px;">
                      <img class="img-fluid product-img" src="assests/images/{{$item->thumbnail}}" alt="">
                  </div>
                  <div class="blog-post-content pt-5" >
                      <div class="blog-post-details pb-0" style="position: absolute; bottom:0">
                          {{-- <div class="blog-post-time">
                              <a href="#">February 4, 2019</a>
                          </div> --}}
                          <div class="blog-post-title">
                              <h5><a href="{{ route('blog.detail',$item->id) }}">{{$item->title}}</a></h5>
                          </div>
                       
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
          <div class="justify-content-center mt-2 d-flex">
            <a class="btn btn-link p-0" href="{{ route('blog.all') }}">view All <i class="fas fa-long-arrow-alt-right ps-2"></i></a>
        </div>
      </div>
  </div>
</section>
{{-- <br>
<div class="container">
<h5 class="text-center"><b>Latest Blogs</b></h5>
  <div class="row py-2">
    @foreach($blogs as $item)
    <div class="col-12 col-md-6 col-lg-4 py-2">
        <div>
          <img src="assests/images/{{$item->thumbnail}}" alt="" class="img-fluid img-responsive">
          <a href="#" class="text-decoration-none text-dark"><h6 class="text-justify"><b>{{$item->title}}</b></h6></a>
        </div>
    </div>
    @endforeach
    <h5 class="text-center">View All</h5>
  </div>
</div> --}}
<br>
<div class=" row-eq-height d-flex p-0">
  <div class="col-6 p-0 d-flex flex-column justify-content-center" style="background-image: url({{ asset('assests/images/men.webp') }});background-size:cover">
   <div class="p-5 text-white p-2">

<div class="h3 ">New Trends</div>
<div class="display-4">
MEN Bee Suit
</div>
</div>
 
    {{-- <img src="{{ asset('assests/images/men.webp') }}"  style="visibility: hidden" alt=""> --}}
  </div>
<div class="col-6 p-0">
  <div class="col-12 p-0 h-60 d-flex flex-column justify-content-center" style="background-image: url({{ asset('assests/images/women.webp') }});background-size:cover" >
    {{-- <img src="{{ asset('assests/images/women.webp') }}" class="img-fluid" style="visibility: hidden" alt=""> --}}
   <div class="p-5 text-white p-2">
    <div class="h4 ">New Trends</div>
<div class="h3">
Women Bee Suit
</div>
  </div>
</div>
  <div class="col-12 p-0 h-40" style="background-image: url({{ asset('assests/images/kids.webp') }});background-size:cover">
    {{-- <img src="{{ asset('assests/images/kids.webp') }}" class="img-fluid" style="visibility: hidden" alt=""> --}}
   <div class="p-5 text-white p-2">
    <div class="h5 ">New Trends</div>
<div class="h4">
Kids Bee Suit
</div>
  </div>
</div>
  </div>
</div>

</div>
<div class="container pt-5">
  <div class="row">
    <div class="col-12">
      <h5>Why Five Star Bee-Keeping Is Important</h5><br>
      <p class="text-justify text-dark">The importance of a bee suit lies in the understanding of the beekeeping job. For the most part, beekeepers act like custodians to the bees, providing them with the conditions and care ideal for producing and nurturing honey. Acting as a Shield However, bees are naturally adapted against attacks on the hives from mammals and other animals. Thus, they may end up attacking the beekeepers as part of a mistaken defense measure. This is where the whole idea of the suit originates from.  Bee stings range from slightly irritating to potentially life-threatening skin allergies. One can never be sure where between this interval a sting lies, thus safety comes in handy. From nausea, diarrhea to even acute respiratory problems, the list of potential dangers goes long. A Beekeeper suit covers the beekeeper from head to toe, including the hands and the face. It is a perfect safety measure that encloses each part of the body that comes in contact with the bees</p>
    </div>
  </div>
</div><br>
<div class="container">
<div class="col-12 text-light" style="background-image:url({{ asset('assests/images/banner.jpg') }});    background-size: cover">
{{-- <img src="{{ asset('assests/images/banner.jpg') }}" class="img-fluid" alt=""> --}}
<div class="p-sm-5 p-1">
<h2> Sign Up For NewsLetter</h2>
<p class="text-secondary">Follow when an unknown printer took a galley of type.</p>
<div class="col-3 text-secondary"><hr></div>
<form action="" method="get" class="pb-5">
  <div class="input-group mb-3 col-sm-6 col-12">
   
    <input type="text" class="form-control p-4" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    <div class="input-group-prepend ">
      <span class="input-group-text text-warning p-2 bg-light" id="basic-addon1">
        Subscribe
      </span>
    </div>
    <div class="input-group-prepend bg-light">
      <button type="submit" class="btn">
<i class="fa fa-mail-forward" aria-hidden="true"></i>
      </button>
  </div>

</form>
</div>
</div>
</div>
</div>
<br><br><br>
@endsection
