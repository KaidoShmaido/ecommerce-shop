<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $table ='carts';
    protected $fillable = [
        "user_id",
        "prod_id",
        "prod_qty",

    ];

    public function products(){
        return $this->belongsTo(Product::class,'prod_id','id');
    }
}
