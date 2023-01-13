<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FoodModel extends Model
{
    use HasFactory;

    // function send_food(){
    //     $foods = DB::table('foods')->get();

    //     return $foods;
    // }

    // protected $fillable = [
    //     'title',
    //     'desctiption',
    // ];

}
