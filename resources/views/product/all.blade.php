@extends('layouts.master')
@section('title') All Product @endsection
@push('css')
<link rel='stylesheet' href='{{ asset('assests/css/rating.css') }}'>
@endpush
@section('content')
<div class="container mt-2 mb-3">
    <div class="d-flex row ">
    @forelse ($products as $product)
     
    <div class="card col-3 m-1" style="width: 18rem;">
        <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
        <img src="/uploads/Products/{{$product->main_image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                @if($product->averageRating>0.0000 && $product->averageRating<=0.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2"><i class="far fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star-half-stroke"></i></label>
              
                @elseif($product->averageRating>=0.5555 && $product->averageRating<=1.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2"><i class="far fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=1.0000 && $product->averageRating<=1.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=1.5555 && $product->averageRating<=2.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"><i class="far fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=2.0000 && $product->averageRating<=2.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3" ><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=2.5555 && $product->averageRating<=3.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="far fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=3.0000 && $product->averageRating<=3.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=3.5555 && $product->averageRating<=4.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="far fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"> <i class="fa-solid fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3" > <i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" > <i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" > <i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=4.0000 && $product->averageRating<4.5555)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="fa-solid fa-star-half-stroke"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"  ><i class="fa-solid fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @elseif($product->averageRating>=4.5555 && $product->averageRating<5.0000)
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"><i class="fa-solid fa-star"></i></label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"  ><i class="fa-solid fa-star"></i></label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2" ><i class="fa-solid fa-star"></i></label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1"  for="star-1" ><i class="fa-solid fa-star"></i></label>
                @else
                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2">
                    <i class="far fa-star"></i>
                </label>
                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                <label class="star star-1" for="star-1">
                    <i class="far fa-star"></i>
                </label>
                @endif
               Rating {{  number_format($product->averageRating,1,'.','') }}
             </div>
               
            </h6>
            <div class="d-flex ">
                <div class="col-6">
                    <span class="card-text"> Price: {{$product->price}}</span>  
                </div>
                <div class="col-6">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->title }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->main_image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-primary ">Add To Cart</button>
                    </form>
                  
                </div>
            </div>
            {{-- <a href="#" class="btn btn-primary">Card button</a> --}}
        </div>
        @empty
        <div style="height: 25vh">
           
        </div>
        No Product Found of This Category
        <div style="height: 25vh">
           
        </div>
        

    @endforelse
</div>
</div>


@endsection