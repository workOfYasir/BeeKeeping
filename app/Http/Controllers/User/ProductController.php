<?php

namespace App\Http\Controllers\User;
use App\Models\Blog;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;
use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function store(Request $request){
        $item = new Product();

        $item->title = $request->title;
        $item->category_id = $request->category_id;
        $item->type_id  = $request->type_id;
        $item->code = $request->code;
        $item->price = $request->price;
        $item->description = $request->description;
        
        if ($request->hasFile('mainimage')) {
            $file = $request->file('mainimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(1,100). '.' . $extension;
            $file->move('uploads/Products/', $filename);
            $item->main_image = $filename;
        }
        if ($request->hasFile('other_image1')) {
            $file = $request->file('other_image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(1,100). '.' . $extension;
            $file->move('Uploads/Products/', $filename);
            $item->other_image1 = $filename;
        }
        if ($request->hasFile('other_image2')) {
            $file = $request->file('other_image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(1,100). '.' . $extension;
            $file->move('Uploads/Products/', $filename);
            $item->other_image2 = $filename;
        }
        if ($request->hasFile('other_image3')) {
            $file = $request->file('other_image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(1,100). '.' . $extension;
            $file->move('Uploads/Products/', $filename);
            $item->other_image3 = $filename;
        }  
        if ($request->hasFile('other_image4')) {
            $file = $request->file('other_image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(1,100). '.' . $extension;
            $file->move('Uploads/Products/', $filename);
            $item->other_image4 = $filename;
        }
        $item->additional_info = $request->additional;

        $item->save();
    }

    public function show($id){
       
        $article = Product::with('types')->find($id);
        // dd($article);
        $comments= Comment::with('reply')->get();

        return view('product.view',compact('article','comments'));
    }
    public function test(){
       
        $article = Product::with('types')->find(1);
        // dd($article);
        return view('product.testview',compact('article'));
    }
    public function showBlog(){
       
        $blogs = Blog::all();
     
        return view('blog.all',compact('blogs'));
   
    }
    public function detailBlog($id){
       
        $blog = Blog::find($id);
     
        return view('blog.detail',compact('blog'));
   
    }
    public function postStar (Request $request, Product $post) {
   
        $rating = new Rating;
        $rating->user_id = Auth::user()->id;
        $rating->rating = $request->input('star');
        $post->ratings()->save($rating);
        
        // $post->ratings()->save($rating);
        return redirect()->back();
  }
  public function comments(Request $request)
  {
     
    $reply = array_values(array_filter($request->reply));
    $comment_id = array_values(array_filter($request->comment_id));

    if($request->comment!=''){
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->comment = $request->comment;
        $comment->save();
    }
   
    if(count($reply)!=0){
        $replies = new Reply();
        $replies->user_id = $request->user_id;
        $replies->reply = $reply[0];
        $replies->comment_id = $comment_id[0];
        $replies->save();
    }
    
    return redirect()->back();
  }
  public function categoryProducts($cat_id, $type)
  {
    $products = Product::where('category_id',$cat_id)->where('type_id',$type)->get();

    // $products = ProductType::where('category_id',$cat_id)->where('id',$type)->get();
    // dd($products);
return view('product.all',compact('products'));
  }
  public function categoryProduct($cat_id)
  {
    $products = Product::where('category_id',$cat_id)->get();

    // $products = ProductType::where('category_id',$cat_id)->where('id',$type)->get();
    // dd($products);
return view('product.all',compact('products'));
  }


}
