
@extends('layouts.master')
@section('title') View Product @endsection
@push('css')
{{-- <script src="{{ asset('assests/css/xzoom.css') }}" ></script> --}}
<link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
<link rel='stylesheet' href='{{ asset('assests/css/comment.css') }}'>
<link rel='stylesheet' href='{{ asset('assests/css/rating.css') }}'>
<style>
    .lSSlideOuter {
        display: flex
    }
    .lSGallery {
        width: 370.5px !important;
        padding: 10px
    }
    .lSPager li {
        margin-left: 5px;
        margin-top: 5px;
        width: 100% !important;
    }
    

    .xzoom-source img, .xzoom-preview img, .xzoom-lens img {
    display: block;
    max-width: none;
    max-height: none;
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    transition: none;
    }
    /* --------------- */

    /* xZoom Styles below */
    .xzoom-container { 
    display: inline-block;
    }

    .xzoom-thumbs {
    text-align: center;
    margin-bottom: 10px;
    }

    .xzoom { 
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);  
    }
    .xzoom2, .xzoom3, .xzoom4, .xzoom5 {
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    }

    /* Thumbs */
    .xzoom-gallery, .xzoom-gallery2, .xzoom-gallery3, .xzoom-gallery4, .xzoom-gallery5 {
    border: 1px solid #cecece;
    margin-left: 5px;
    margin-bottom: 10px;
    }

    .xzoom-source, .xzoom-hidden {
    display: block;
    position: static;
    float: none;
    clear: both;
    }

    /* Everything out of border is hidden */
    .xzoom-hidden {
    overflow: hidden;
    }

    /* Preview */
    .xzoom-preview {
    border: 1px solid #888;
    background: #2f4f4f;
    box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
    }

    /* Lens */
    .xzoom-lens {
    border: 1px solid #555;
    box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
    cursor: crosshair;
    }

    /* Loading */
    .xzoom-loading {
    background-position: center center;
    background-repeat: no-repeat;
    border-radius: 100%;
    opacity: .7;
    background: url(../example/images/xloading.gif);
    width: 48px;
    height: 48px;
    }

    /* Additional class that applied to thumb when it is active */
    .xactive {
    -webkit-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
    -moz-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
    box-shadow: 0px 0px 3px 0px rgba(74,169,210,1); 
    border: 1px solid #4aaad2;
    }

    /* Caption */
    .xzoom-caption {
    position: absolute;
    bottom: -43px;
    left: 0;
    background: #000;
    width: 100%;
    text-align: left;
    }

    .xzoom-caption span {
    color: #fff;
    font-family: Arial, sans-serif;
    display: block;
    font-size: 0.75em;
    font-weight: bold;
    padding: 10px;
    }

</style>
@endpush
@section('content')

<div class="container mt-2 mb-3">
    <div class="row no-gutters">
        <div class="col-sm-5 col-12 pr-2">
            <div class="card">
                <div class="demo">
                    <ul id="lightSlider">
                        <li data-thumb="/uploads/Products/{{$article->main_image}}"> <img class="img-fluid xzoom" xoriginal="/uploads/Products/{{$article->main_image}}" src="/uploads/Products/{{$article->main_image}}" /> </li>
                        <li data-thumb="/uploads/Products/{{$article->other_image1}}"> <img class="img-fluid xzoom" xoriginal="/uploads/Products/{{$article->other_image1}}" src="/uploads/Products/{{$article->other_image1}}" /> </li>
                        <li data-thumb="/uploads/Products/{{$article->other_image2}}"> <img class="img-fluid xzoom" xoriginal="/uploads/Products/{{$article->other_image2}}" src="/uploads/Products/{{$article->other_image2}}" /> </li>
                        <li data-thumb="/uploads/Products/{{$article->other_image3}}"> <img class="img-fluid xzoom" xoriginal="/uploads/Products/{{$article->other_image3}}" src="/uploads/Products/{{$article->other_image3}}" /> </li>
                        <li data-thumb="/uploads/Products/{{$article->other_image4}}"> <img class="img-fluid xzoom" xoriginal="/uploads/Products/{{$article->other_image4}}" src="/uploads/Products/{{$article->other_image4}}" /> </li>

                    </ul>
                </div>
            </div>
            <div class="card mt-2">
                <div class="col-12 mt-3">
                    <h6>Reviews</h6>
                    <div class="d-flex flex-row">
                        <div class="stars"> 
                            <div id="rateYo" data-rateyo-rating="{{ $article->averageRating}}"> </div>
                            <form class="form-horizontal poststars" action="{{route('productStar', $article->id)}}" id="addStar" method="POST">
                                {{ csrf_field() }}
                                      <div class="form-group required">
                                        <div class="col-sm-12">
                                            @if($article->averageRating>0.0000 && $article->averageRating<=0.5555)
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
                                          
                                            @elseif($article->averageRating>=0.5555 && $article->averageRating<=1.0000)
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
                                            @elseif($article->averageRating>=1.0000 && $article->averageRating<=1.5555)
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
                                            @elseif($article->averageRating>=1.5555 && $article->averageRating<=2.0000)
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
                                            @elseif($article->averageRating>=2.0000 && $article->averageRating<=2.5555)
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
                                            @elseif($article->averageRating>=2.5555 && $article->averageRating<=3.0000)
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
                                            @elseif($article->averageRating>=3.0000 && $article->averageRating<=3.5555)
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
                                            @elseif($article->averageRating>=3.5555 && $article->averageRating<=4.0000)
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
                                            @elseif($article->averageRating>=4.0000 && $article->averageRating<4.5555)
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
                                            @elseif($article->averageRating>=4.5555 && $article->averageRating<5.0000)
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
                                       
                                         </div>
                                      </div>
                              </form>
                        </div> 
                        <span class="ml-1 font-weight-bold"> {{  number_format($article->averageRating,1,'.','') }}</span>
                    </div>
                </div>
                {{-- <hr> --}}
                {{-- <div class="col-12">
                    <div class="badges">  <span class="badge bg-dark "> <i class="fa fa-image"></i> 23 </span> <span class="badge bg-dark "> <i class="fa fa-comments-o"></i> 23 </span> <span class="badge bg-warning"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="ml-1">2,123</span> </span> </div>
                </div>
                <hr> --}}
                
                {{-- <div class="comment-section">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle profile-image">
                                <div class="d-flex flex-column ml-1 comment-profile">
                                    <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Lori Benneth</span>
                                </div>
                            </div>
                            <div class="date"> <span class="text-muted">2 May</span> </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12 mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle profile-image">
                                <div class="d-flex flex-column ml-1 comment-profile">
                                    <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Timona Simaung</span>
                                </div>
                            </div>
                            <div class="date"> <span class="text-muted">12 May</span> </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-12 col-sm-7">
            <div class="card ">
                {{-- <div class="d-flex flex-row align-items-center">
                    <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                </div>
                <div class="about"> <span class="font-weight-bold">IKEA x HAY Ypperlig Collection </span>
                    <h4 class="font-weight-bold">$3,444</h4>
                </div>
                <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button> <button class="btn btn-warning btn-long buy">Buy it Now</button> <button class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button> </div> --}}
                {{-- <hr> --}}
               
               
                <div class="product-description col-12 m-4">
                    
                    {{-- <div class="my-color"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked> <span class="red"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="blue"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="green"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="orange"></span> </label> </div> --}}
                    <div class="mt-2 col-12">
                        <span  class="font-weight-bold">Name</span>
                        <div class="display-6">{{$article->title}}</div>
                    </div>
                    <div class="mt-2 col-12"> <span class="font-weight-bold">Description</span>
                        <p>The minimalist collaboration features chairs, lightening, Shelves, Sofas, Desks and various home accessories, all offering form and function at the same point.We use high-strength clamps and joinery techniques specially designed for engineered wood beds. Ergo, no irksome creaks - and you can sleep like a baby, well into adulthood!</p>
                        <div class="bullets">
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Anti-creak joinery</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Sturdy laminate surfaces</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Relocation friendly design</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">High gloss, high style</span> </div>
                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Easy-access hydraulic storage</span> </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center my-3 col-12"> <i class="fa fa-calendar-check-o"></i> <span class="ml-1">Delivery from sweden, 15-45 days</span> </div>
                    <div class="my-3 col-12">
                        <span class="font-weight-bold">Color:</span> 
                        <div class="btn-group btn-group-toggle d-table-row" data-toggle="buttons">
                            <label class="btn btn-warning">
                                <input type="radio" name="color"> Blue
                            </label>
                            <label class="btn btn-warning">
                                <input type="radio"  name="color"> Red
                            </label>
                            <label class="btn btn-warning">
                                <input type="radio"  name="color"> Black
                            </label>
                        </div>
                    </div>
                    <div class="my-3 col-12">
                        <span class="font-weight-bold">Price:</span> {{$article->price}}
                    </div>
                    <div class="my-3 col-12">
                        <span class="font-weight-bold">Size:</span> 
                        <div class="btn-group btn-group-toggle d-table-row" data-toggle="buttons">
                            <label class="btn btn-warning">
                                <input type="radio" name="size"> X Small
                            </label>
                            <label class="btn btn-warning">
                                <input type="radio"  name="size"> Small
                            </label>
                            <label class="btn btn-warning">
                                <input type="radio"  name="size"> Medium
                            </label>
                            <label class="btn btn-warning">
                                <input type="radio" name="size"> Large
                            </label>
                            <label class="btn btn-warning">
                                <input type="radio"  name="size"> XLarge
                            </label>
                           
                        </div>
                    </div>
                    <div class="my-3 d-flex">
                        
                            <span class="font-weight-bold">Quantity:</span> 
                            <div class="col-6 input-group inline-group">
                                <button class="btn btn-outline-secondary btn-minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >
                                    <i class="fa fa-minus"></i>
                                </button>
                                
                                <input class="form-control quantity" min="0" name="quantity" value="1" type="number">
                                
                                <button class="btn btn-outline-secondary btn-plus"  onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        
                    </div>
                </div>
            </div>
            {{-- <div class="card mt-2"> <span>Similar items:</span>
                <div class="similar-products mt-2 d-flex flex-row">
                    <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/KZpuufK.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">$1,999</h6>
                        </div>
                    </div>
                    <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/GwiUmQA.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">$1,699</h6>
                        </div>
                    </div>
                    <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/c9uUysL.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">$2,999</h6>
                        </div>
                    </div>
                    <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/kYWqL7k.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">$3,999</h6>
                        </div>
                    </div>
                    <div class="card border p-1" style="width: 9rem;"> <img src="https://i.imgur.com/DhKkTrG.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">$999</h6>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
{{-- <p>
    
    <button class="btn btn-primary" type="button">
      Button with data-target
    </button>
  </p> --}}
 
<div class="container mt-5 mb-5 " >
    <div class="d-flex justify-content-center row">
        <div class="d-flex flex-column col-md-8">
            <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                {{-- <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1"><i class="fa fa-sort-up fa-2x hit-voting"></i><span>127</span><i class="fa fa-sort-down fa-2x hit-voting"></i></div> --}}
                <div class="d-flex flex-column ml-3">
                    {{-- <div class="d-flex flex-row post-title">
                        <h5>Is sketch 3.9.1 stable?</h5><span class="ml-2">(Jesshead)</span>
                    </div> --}}
                    <div class="d-flex flex-row align-items-center align-content-center post-title"><span class="bdge mr-1">All</span><span class="mr-2 comments"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" role="button" aria-controls="collapseExample">{{ count($comments) }} comments&nbsp;</span><span class="mr-2 dot"></span></div>
                </div>
            </div>
            <form action="{{ route('comment') }}" method="post">
                @csrf
                <div class="coment-bottom bg-white p-2 px-4 collapse" id="collapseExample">
                    <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                        @if(Illuminate\Support\Facades\Auth::check())
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="text" class="form-control mr-3" name="comment" placeholder="Add comment"><button class="btn btn-primary" type="submit">Comment</button>
                        @endif
                    </div>
                    @foreach ($comments as $key => $comment)
                 
                    
                    <div class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2 text-primary">{{ $comment->user->name }}</h5><span class="dot mb-1"></span>
                        </div>
                        <div class="comment-text-sm"><span>{{ $comment->comment }}</span></div>
                        <div class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons">
                                <h6 class="ml-2 mt-1" data-toggle="collapse" data-target="#replyExample{{ $key }}" aria-expanded="false" role="button" aria-controls="replyExample1" onclick="reply({{ $comment->id  }},{{ $key }})">Reply</h6>
                            </div>
                            <div class="collapse ml-5" id="replyExample{{ $key }}">
                                <div class="border-0   rounded bg-light bg-gradient p-2">
                                    @foreach ($comment->reply as $reply)
                                    <h5 class="mr-2 text-primary">{{ $reply->user->name }}</h5><span class="dot mb-1"></span>
                                    <div class="comment-text-sm"><span>{{ $reply->reply }}</span></div>
                                    @endforeach
                                    <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                        <input type="hidden" name="comment_id[]" id="comment_id_{{ $key }}">
                                        @if(Illuminate\Support\Facades\Auth::check())
                                        <input type="text" name="reply[]" class="form-control mr-3" placeholder="Add comment"><button class="btn btn-primary" type="submit">Comment</button>
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    {{-- <script src="{{ asset('assests/js/xzoom.js') }}" ></script> --}}
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>

<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
    // $(function(){
        $(".xzoom").xzoom({
        zoomWith: 400,
        tint:"#333",
        Xoffset:15,
    // });
    })
    $('#addStar').change('.star', function(e) {     
        $(this).submit();
        e.preventDefault();
    });
    function reply(id,index)
    {

        comment_id = $('#comment_id_'+index).val();

        if(comment_id=='')
        {
            $('#comment_id_'+index).val(id);
        }else{
            $('#comment_id_'+index).val('');
        }
    
    }
   
</script>
@endpush