<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
