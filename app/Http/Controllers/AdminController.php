<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index(){
    $photos = Photo::all();
    return view('dashboard', compact('photos'));
 }
}
