<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Photo;
use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $folderSizeBytes = $this->getFolderSize(public_path('photo'));
        // Przekładamy rozmiar na bardziej przyjazny format (MB)
        $folderSizeMB = number_format($folderSizeBytes / (1024 * 1024), 2);
        return view('admin.group.index', compact('orders', 'folderSizeMB'));
    }
    public function show(Order $order)
    {
        $items = Item::where('order_id', $order->id)->get();
        $photos = Photo::where('order_id', $order->id)->get();
        // Tworzymy pustą tablicę na unikalne endingi
        $endings = [];

        // Przechodzimy przez wszystkie zdjęcia i dodajemy endingi do tablicy, jeśli nie istnieją
        foreach ($photos as $photo) {
            $ending = $photo->ending; // Pobieramy ending zdjęcia

            // Jeśli ending nie jest jeszcze na liście, dodajemy go
            if (!in_array($ending, $endings)) {
                $endings[] = $ending;
            }
        }
        return view('admin.group.show', compact('order', 'items', 'photos', 'endings'));
    }
    // Funkcja generująca ZIP i pobierająca go
    public function download(Order $order)
    {
        // Pobieramy wszystkie zdjęcia powiązane z zamówieniem
        $photos = Photo::where('order_id', $order->id)->get();

        // Pobieramy wszystkie przedmioty powiązane z zamówieniem
        $items = Item::where('order_id', $order->id)->get();

        // Tworzymy nazwę pliku ZIP
        $zipFileName = "zamowienie_{$order->id}.zip";

        // Sprawdzamy, czy katalog 'zip' istnieje, jeśli nie to go tworzymy
        $zipFolder = public_path('zip');
        if (!file_exists($zipFolder)) {
            mkdir($zipFolder, 0755, true); // Tworzy katalog, jeśli nie istnieje
        }

        // Ścieżka do pliku ZIP
        $zipPath = $zipFolder . '/' . $zipFileName;

        // Tworzymy nowy obiekt ZIP
        $zip = new ZipArchive;

        // Otwieramy plik ZIP do zapisu
        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            // Przechodzimy przez wszystkie przedmioty i dodajemy je do ZIP w odpowiednich katalogach
            foreach ($items as $item) {

                // Tworzymy katalog w ZIP na podstawie item->name
                $zip->addEmptyDir($item->name);

                // Filtrujemy zdjęcia powiązane z danym przedmiotem
                $itemPhotos = $photos->where('format', $item->name);

                // Zbieramy unikalne endingi dla danego przedmiotu
                $endings = $itemPhotos->pluck('ending')->unique();

                // Przechodzimy przez wszystkie unikalne endingi
                foreach ($endings as $ending) {
                    $list_of_counts = [];

                    // Tworzymy podfolder dla każdego endingu
                    $zip->addEmptyDir("{$item->name}/{$ending}");

                    // Filtrujemy zdjęcia, które odpowiadają danemu endingowi
                    $endingPhotos = $itemPhotos->where('ending', $ending);

                    foreach ($endingPhotos as $i) {
                        // Sprawdź, czy element już istnieje w tablicy
                        if (!in_array(strval($i->count), $list_of_counts)) {
                            array_push($list_of_counts, strval($i->count));
                        }
                    };

                    foreach ($list_of_counts as $count) {
                        // Tworzymy podfolder dla każdego endingu
                        $zip->addEmptyDir("{$item->name}/{$ending}/{$count}");
                        // Filtrujemy zdjęcia, które odpowiadają danemu endingowi
                        $countPhotos = $itemPhotos->where('count', $count);

                        // Dodajemy zdjęcia do odpowiedniego folderu i podfolderu
                        foreach ($countPhotos as $photo) {
                            // Ścieżka do zdjęcia w folderze publicznym
                            $filePath = public_path('photo/' . $photo->file_name);

                            // Sprawdzamy, czy zdjęcie istnieje w folderze publicznym
                            if (file_exists($filePath)) {
                                // Dodajemy zdjęcie do folderu w ZIP
                                $zip->addFile($filePath, "{$item->name}/{$ending}/{$count}/{$photo->file_name}");
                            }
                        }
                    }
                }
            }

            // Zamykamy ZIP
            $zip->close();
        }

        // Sprawdzamy, czy plik ZIP został utworzony
        if (file_exists($zipPath)) {
            // Zwracamy plik ZIP do pobrania
            return response()->download($zipPath)->deleteFileAfterSend(true);
        } else {
            // Jeśli plik ZIP nie został utworzony, zwracamy błąd
            return response()->json(['error' => 'Nie udało się utworzyć pliku ZIP.'], 500);
        }
    }
    public function delete(Order $order)
    {
        // Pobieramy wszystkie przedmioty powiązane z zamówieniem
        $items = $order->items;

        // Pobieramy wszystkie zdjęcia powiązane z zamówieniem
        $photos = $order->photos;

        // Usuwamy zdjęcia z serwera
        foreach ($photos as $photo) {
            // Ścieżka do pliku zdjęcia
            $filePath = public_path('photo/' . $photo->file_name);

            // Sprawdzamy, czy plik istnieje
            if (file_exists($filePath)) {
                // Usuwamy plik zdjęcia
                unlink($filePath);
            }
        }

        // Usuwamy wszystkie zdjęcia z bazy danych
        $photos->each(function ($photo) {
            $photo->delete();
        });

        // Usuwamy wszystkie przedmioty z bazy danych
        $items->each(function ($item) {
            $item->delete();
        });

        // Usuwamy samo zamówienie
        $order->delete();

        // Możemy przekierować użytkownika z komunikatem o sukcesie
        return redirect()->route('dashboard')->with('success', 'Zamówienie zostało usunięte wraz z wszystkimi powiązanymi danymi.');
    }
    public function dashboard(){
        return redirect()->route('dashboard');
    }
}
