<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductCategory;

class ProductType extends Model
{
    use SoftDeletes,HasFactory;

    protected $table = "product_types";

    protected $fillable = [
        'category_id','name'
    ];

    function category(){
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
