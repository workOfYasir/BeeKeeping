<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reply;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
