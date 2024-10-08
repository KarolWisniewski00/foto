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
    public function delete(Photo $photo)
    {
        // Znalezienie zdjęcia na podstawie ID
        $photo = Photo::find($photo->id);
    
        // Sprawdzenie, czy zdjęcie istnieje
        if (!$photo) {
            return response()->json(['fail' => 'Zdjęcie nie zostało znalezione.'], 404);
        }
    
        // Ścieżka do pliku w katalogu public/photo
        $filePath = public_path('photo/' . $photo->file_name);
    
        // Sprawdzenie, czy plik istnieje i próba jego usunięcia
        if (file_exists($filePath)) {
            unlink($filePath); // Usuwanie pliku
        }
    
        // Usuwanie rekordu z bazy danych
        $photo->delete();
    
        return redirect()->route('group')->with('success', 'Zdjęcie zostało usunięte.');
    }
    
    public function download(Photo $photo)
    {
        // Znalezienie zdjęcia na podstawie ID
        $photo = Photo::find($photo->id);
    
        // Sprawdzenie, czy zdjęcie istnieje
        if (!$photo) {
            return response()->json(['fail' => 'Zdjęcie nie zostało znalezione.'], 404);
        }
    
        // Ścieżka do pliku w katalogu public/photo
        $filePath = public_path('photo/' . $photo->file_name);
    
        // Sprawdzenie, czy plik istnieje
        if (!file_exists($filePath)) {
            return response()->json(['fail' => 'Plik nie istnieje.'], 404);
        }
    
        // Pobranie pliku
        return response()->download($filePath);
    }
    
}
