<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'id','title','author','description','price','quantity','category_id','img',
    ];
}
