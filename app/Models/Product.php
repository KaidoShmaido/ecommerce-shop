<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\OrderItems;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable =[
        'category_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'tax',
        'quantity',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description'
       ];
       
       
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
};

