@extends('layouts.master')
@section('content')
<form action="/storeproduct" method="post" enctype="multipart/form-data">
    @csrf
    <br><label for="title">Title</label>
    <input type="text" name="title" id="title"><br>
    <label for="category">Category</label>
    <input type="number" name="category_id" id="category"><br>
    <label for="type">Type</label>
    <input type="number" name="type_id" id="type"><br>
    <label for="code">Code</label>
    <input type="number" name="code" id="code"><br>
    <label for="price">Price</label>
    <input type="number" name="price"><br>
    <label for="des">Description</label>
    <textarea name="description" id="des" cols="30" rows="10"></textarea><br>
    <label for="mainimage">Main Image</label>
    <input type="file" name="mainimage" id="mainimage"><br>
    <label for="other_image1">Other Imag1</label>
    <input type="file" name="other_image1" id="other_image1"><br>
    <label for="other_image2">Other Imag2</label>
    <input type="file" name="other_image2" id="other_image2"><br>
    <label for="other_image3">Other Imag3</label>
    <input type="file" name="other_image3" id="other_image3"><br>
    <label for="other_image4">Other Imag4</label>
    <input type="file" name="other_image4" id="other_image4"><br>
    <label for="additional">Additional Info</label>
    <textarea name="additional" id="additional" cols="30" rows="10"></textarea><br>
    <input type="submit">
</form>
@endsection