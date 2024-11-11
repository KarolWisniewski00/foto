<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    var $fillable = [
        'email',
        'phone',
        'name',
        'total_price',
        'total_count'
    ];
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
