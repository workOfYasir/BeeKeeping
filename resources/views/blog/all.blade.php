@extends('layouts.master')
@section('title') View Product @endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assests/css/blog.css') }}">

@endpush
@section('content')
<section class="section " id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Latest News</h2>
                    <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($blogs as $item )
            <div class="col-lg-4">
                <div class="blog-grid">
                    <div class="blog-img">
                        <div class="date">04 FEB</div>
                        <a href="#">
                            <img src="{{ asset('assests/images/'.$item->thumbnail) }}"  class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="blog-info ">
                        <h5><a href="#">{{ $item->title }}</a></h5>
                        <p class="description ellipsis">{{ $item->blog }}</p>
                        <div class="btn-bar">
                            <a href="#" class="px-btn-arrow ">
                                <span>Read More</span>
                                <i class="arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
            @empty
                
            @endforelse
           
            
        </div>
    </div>
</section>
@endsection
