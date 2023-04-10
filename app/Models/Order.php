<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table ='orders';
    protected $fillable= [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'status',
        'zipcode',
        'message',
        'tracking_no'
    ];
}
