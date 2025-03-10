<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /** @use HasFactory<\Database\Factories\MembersFactory> */
    use HasFactory;

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function product(){
        return $this->hasMany(product::class);
    }
    
}
