@extends('layouts.master')
@section('title') View Product @endsection
@section('content')

<div class="container mt-2 mb-3">
    <div class="row no-gutters">
<input type="text" class="longitude">
<input type="text" class="latitude">

    </div>

        <div class="form-group mb-0 ">
            <div id="mapid" class="center-block" style="width: 400px; height: 400px;"></div>
        </div>
  
</div>
@endsection
@push('scripts')

@endpush