@extends('layouts.master')
@section('title') View Product @endsection
@push('css')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            @if(isset($article))
                <div class="col-12 col-sm-7" style="border:1px solid black">
                    <div class="d-flex" style="border:1px solid black">
                        <div class="product-img">
                            <img src="/uploads/Products/{{$article->main_image}}" alt="Product-Image" class="img-fluid img-responsive py-3">
                        </div>
                        <div class="other-img py-2 px-2">
                        <img src="/uploads/Products/{{$article->other_image1}}" alt="Product-Image" class="img-fluid img-responsive py-2" width="110" height="110"><br>
                        <img src="/uploads/Products/{{$article->other_image2}}" alt="Product-Image" class="img-fluid img-responsive py-2" width="110" height="110"><br>
                        <img src="/uploads/Products/{{$article->other_image3}}" alt="Product-Image" class="img-fluid img-responsive py-2" width="110" height="110"><br>
                        <img src="/uploads/Products/{{$article->other_image4}}" alt="Product-Image" class="img-fluid img-responsive py-2" width="110" height="110">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5" style="border:1px solid black">
                    <div class="detail py-3 px-2" style="border:1px solid black">
                        <h3><b>{{$article->title}}</b></h3>
                        <h6>Price: ${{$article->price}}</h6>&nbsp&nbsp <h6>Availability: In Stock</h6>
                        <h6>Category: Not fetched</h6>
                        <h6>Type: Not fetched</h6>
                        <h6>Share: 
                            <i class="fab fa-facebook-f"></i>&nbsp&nbsp
                            <i class="fab fa-twitter"></i>&nbsp&nbsp
                            <i class="fab fa-linkedin-in"></i>&nbsp&nbsp
                            <i class="fab fa-pinterest-p"></i></h6>
                            <hr>
                            <div class="description py-2">
                                <h6 class="text-justify">{{$article->description}}</h6>
                            </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection