<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkincareProduct extends Model
{
    protected $fillable = ['name', 'description', 'brand', 'price', 'stock'];
    use HasFactory;
}
