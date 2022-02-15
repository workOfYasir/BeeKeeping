<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
       
        $products = Product::limit(5)->get();
        $blogs = Blog::limit(3)->get();
        return view('welcome',compact('products','blogs'));
    }
}
