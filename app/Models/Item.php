<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    var $fillable = [
        'name',
        'price',
        'total',
        'order_id',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}