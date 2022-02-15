@extends('layouts.master')
@section('title') View Product @endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assests/css/blogDetail.css') }}">
@endpush
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assests/images/'.$blog->thumbnail) }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center" style="background-color: #0000005c;">
          <h1 class="display-3 ">{{ $blog->title }}</h1>
          <h4>The last 48 hours of my life were total madness. This is what I did.
          </h4>
          <br>
          <a href="#blog" class="btn btn-rose btn-round btn-lg">
            <i class="material-icons">format_align_left</i> Read Article
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="main main-raised mb-5">
    <div class="container">
      <div class="section section-text">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h3 class="title">The Forest Looks Different at Night...</h3>
            <p class="h4 text-justify" id="blog">{{ $blog->blog }}</p>
              <div class="blockquote undefined">
              <small>
                Kanye West, Producer.
              </small>
            </div>
          </div>

          <div class="section col-md-10 ml-auto mr-auto ">
            <div class="row">
              <div class="col-md-12">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('assests/images/'.$blog->thumbnail) }}">
              </div>           
          </div>          
        </div>
      </div>


   
    </div>
  </div>
</div>

@endsection
