<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductType;
use willvincent\Rateable\Rateable;

class Product extends Model
{
    use SoftDeletes,HasFactory,Rateable;

    protected $table = 'products';

    protected $fillable = [
        'title' , 'category_id' , 'type_id' , 'code' , 'price' , 'description' , 
        'main_image' , 'other_image1' , 'other_image2' , 'other_image3' , 'other_image4',
        'additional_info'
    ];

    public function types(){
        return $this->belongsTo(ProductType::class, 'p_type_id');
    }
    public function rating()
    {
    return $this->hasMany(Rating::class);
    }
   
}
