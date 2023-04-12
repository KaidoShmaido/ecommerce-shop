<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\OrderItem;

class OrderItem extends Model
{
    use HasFactory;
    protected $table ='order_items';
    protected $fillable =[
        'order_id',
        'prod_id',
        'price',
        'quantity'
    ];
    public function products()
    {
        return $this->belongsTo(Product::class,'prod_id','id');
    }


}
