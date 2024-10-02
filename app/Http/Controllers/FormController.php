<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $email = $request->input('email');
        $phone = $request->input('phone');
        $format = $request->input('format');
        $ending = $request->input('ending');
        //Przenoszenie pliku z formularza do public/photo
        $file = $request->file('file');
        $fileName = time() . rand(1, 100) . '.' . $file->extension();
        $res = $file->move(public_path('photo'), $fileName);

        $photo = new Photo();
        $photo->file_name = $fileName;
        $photo->email = $email;
        $photo->phone = $phone;
        $photo->format = $format;
        $photo->ending = $ending;

        $photo->save();

        if ($res) {
            return response()->json(['success' => 'Zdjęcie zostało pomyślnie przesłane.']);
        } else {
            return response()->json(['fail' => 'Zdjęcie nie zostało zapisane.']);
        }
    }
}
