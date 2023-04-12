<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItems;

class Rating extends Model
{
    use HasFactory;
    protected $table ='ratings';
    protected $fillable =[
        'user_id',
        'prod_id',
        'stars_rated'
    ];
}
