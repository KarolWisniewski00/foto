<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    var $fillable = [
        'file_name',
        'format',
        'ending',
        'count',
        'order_id',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
