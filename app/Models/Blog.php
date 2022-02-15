<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = "blogs";
     
    protected $fillable = [
        'user_id','title','blog','thumbnail'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
