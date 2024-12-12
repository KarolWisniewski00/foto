<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $folderSizeBytes = $this->getFolderSize(public_path('photo'));
        // Przekładamy rozmiar na bardziej przyjazny format (MB)
        $folderSizeMB = number_format($folderSizeBytes / (1024 * 1024), 2);
        $settings = Setting::all();
        return view('admin.price.index', compact('folderSizeMB', 'settings'));
    }
    public function createUp()
    {
        return view('admin.price.createup');
    }
    public function createDown()
    {
        return view('admin.price.createdown');
    }
    public function storeUp(Request $request)
    {
        $setting = new Setting();
        $setting->name = $request->name;
        $res = $setting->save();

        if ($res) {
            return redirect()->route('price')->with('success', 'Treść została pomyślnie zapisana.');
        } else {
            return redirect()->route('price.create.up')->with('fail', 'Treść nie została zapisana.');
        }
    }
    public function storeDown(Request $request)
    {
        $setting = new Setting();
        $setting->copies_start = $request->start;
        $setting->copies_end = $request->end;
        $setting->price = $request->price;
        $setting->type = True;
        $res = $setting->save();

        if ($res) {
            return redirect()->route('price')->with('success', 'Treść została pomyślnie zapisana.');
        } else {
            return redirect()->route('price.create.up')->with('fail', 'Treść nie została zapisana.');
        }
    }

    public function delete(Setting $setting)
    {
        $res = $setting->delete();
        if ($res) {
            return redirect()->route('price')
                ->with('success', 'Treść została usunięta.');
        } else {
            return redirect()->route('price')
                ->with('fail', 'Wystąpił błąd podczas usuwania treści.');
        }
    }
}
