<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = time() . rand(1, 100) . '.' . $file->extension();
        $res = $file->move(public_path('photo'), $fileName);

        if ($res) {
            return response()->json(['success' => 'Zdjęcie zostało pomyślnie przesłane.']);
        } else {
            return response()->json(['fail' => 'Zdjęcie nie zostało zapisane.']);
        }
    }
}
