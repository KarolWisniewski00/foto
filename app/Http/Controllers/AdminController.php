<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
      $photos = Photo::all();
      return view('dashboard', compact('photos'));
   }
   public function group()
   {
      // Grupowanie na podstawie email, phone, format, ending oraz zliczanie zdjęć w grupie
      $photos = Photo::selectRaw('email, phone, format, ending, COUNT(*) as total_photos')
         ->groupBy('email', 'phone', 'format', 'ending')
         ->get();

      // Przekazanie danych do widoku
      return view('admin.group.index', compact('photos'));
   }
}
