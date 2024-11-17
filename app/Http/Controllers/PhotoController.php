<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::paginate(20);
        $folderSizeBytes = $this->getFolderSize(public_path('photo'));
        // Przekładamy rozmiar na bardziej przyjazny format (MB)
        $folderSizeMB = number_format($folderSizeBytes / (1024 * 1024), 2);
        return view('dashboard', compact('photos','folderSizeMB'));
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
