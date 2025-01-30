<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    /** @use HasFactory<\Database\Factories\MembersFactory> */
    use HasFactory;

    public function posts(){
        return $this->hasMany(post::class);
    }

    public function product(){
        return $this->hasMany(product::class);
    }
    
}
