<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    public function queryCat()
    {
        return Categories::whereNull('category_id');
    }
    protected $fillable = ['name'];
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
