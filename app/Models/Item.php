<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    var $fillable = [
        'name',
        'price',
        'total',
        'order_id',
        'count',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    protected static function booted()
    {
        static::deleting(function ($item) {
            // Jeśli zdjęcia są powiązane z przedmiotem, możesz je również usunąć
            try {
                $item->photos()->each(function ($photo) {
                    $photo->delete();
                });
            } catch (Exception) {
            }
        });
    }
}
