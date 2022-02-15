<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SliderImage extends Model
{
    use SoftDeletes,HasFactory;

    protected $table = 'slider_images';

    protected $fillable = ['image1' , 'image2' , 'image3' , 'image4'];
}
