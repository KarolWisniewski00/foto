<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $folderSizeBytes = $this->getFolderSize(public_path('photo'));
        // Przekładamy rozmiar na bardziej przyjazny format (MB)
        $folderSizeMB = number_format($folderSizeBytes / (1024 * 1024), 2);
        return view('admin.price.index', compact('folderSizeMB'));
    }
}
