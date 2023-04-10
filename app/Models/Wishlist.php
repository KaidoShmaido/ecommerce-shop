<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable =[
        "prod_id",
        'user_id'
    ];
    public function products(){
        return $this->belongsTo(Product::class,'prod_id','id');
    }
}
