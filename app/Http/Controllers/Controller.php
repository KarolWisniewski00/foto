<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getFolderSize($folderPath)
    {
        $totalSize = 0;
        // Sprawdzamy, czy folder istnieje
        if (is_dir($folderPath)) {
            // Pobieramy wszystkie pliki w folderze
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($folderPath, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::LEAVES_ONLY);

            foreach ($files as $file) {
                // Ignorujemy foldery
                if (!$file->isDir()) {
                    // Dodajemy rozmiar pliku do sumy
                    $totalSize += $file->getSize();
                }
            }
        }

        return $totalSize;
    }
    public function getFiles($folderPath)
    {
        $fileList = [];

        // Sprawdzamy, czy folder istnieje
        if (is_dir($folderPath)) {
            // Pobieramy wszystkie pliki w folderze
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($folderPath, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::LEAVES_ONLY
            );

            foreach ($files as $file) {
                // Ignorujemy foldery i zapisujemy pełną ścieżkę do pliku
                if (!$file->isDir()) {
                    $fileList[] = $file->getPathname();
                }
            }
        }

        return $fileList;
    }
}
