<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'imgPath', 'price', 'description', 'stars', 'location', 'createdAt', 'updatedAt', 'prtypeIdice'];
}
