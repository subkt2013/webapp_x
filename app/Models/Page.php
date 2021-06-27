<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        // 投稿は複数のコメントを持つ
        return $this->hasMany('App\Models\Comment');
    }


}
