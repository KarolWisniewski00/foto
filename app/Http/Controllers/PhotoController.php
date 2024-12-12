<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::paginate(20);
        $folderSizeBytes = $this->getFolderSize(public_path('photo'));
        // Przekładamy rozmiar na bardziej przyjazny format (MB)
        $folderSizeMB = number_format($folderSizeBytes / (1024 * 1024), 2);
        $photos = $this->getFiles(public_path('photo'));
        return view('dashboard', compact('photos', 'folderSizeMB'));
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

    public function download($photo)
    {
        // Pobierz ścieżkę pliku z żądania
        $fullPath = public_path($photo);

        // Sprawdź, czy plik istnieje
        if (File::exists($fullPath)) {
            // Usuń plik
            File::delete($fullPath);

            // Zwrot informacji o sukcesie
            return redirect()->back()->with('success', 'Plik został usunięty.');
        }

        // Zwrot informacji o błędzie
        return redirect()->back()->with('error', 'Plik nie istnieje.');
    }
    public function deleteAll()
    {
        $photos = $this->getFiles(public_path('photo'));

        foreach ($photos as $key => $value) {
            File::delete($value);
        }

        return redirect()->back()->with('success', 'Wszystkie zdjęcia zostały usunięte.');
    }
}
