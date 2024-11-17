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
    protected static function booted()
    {
        static::deleting(function ($photo) {
            // Usuwanie pliku zdjęcia z serwera przed usunięciem rekordu z bazy danych
            $filePath = public_path('photo/' . $photo->file_name);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        });
    }
}
