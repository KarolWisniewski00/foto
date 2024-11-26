<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Photo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $imageData = base64_encode(file_get_contents($file));
        $fileId = uniqid();
        $fileName = time() . rand(1, 100) . '.png';

        // Zdekodowanie danych base64
        $image_data = base64_decode($imageData);
        $path = public_path('photo/' . $fileName);

        // Upewnij się, że katalog "photo" istnieje w "public"
        if (!file_exists(public_path('photo'))) {
            mkdir(public_path('photo'), 0755, true); // Tworzy katalog, jeśli nie istnieje
        }

        // Zapisanie pliku na dysku
        file_put_contents($path, $image_data);

        return response()->json([
            'imageData' => $imageData,
            'fileId' => $fileId,
            'fileName' => $fileName,
        ]);
    }

    public function store_form(Request $request)
    {
        $photos = json_decode($request->photos, true);
        $rows = json_decode($request->rows, true);

        //tworzenie zamównienia
        $order = new Order();
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->name = $request->name;
        $order->total_price = $request->total_price;
        $order->total_count = $request->total_count;
        $order->save();

        foreach ($photos as $key => $element) {
            $file_name = time() . rand(1, 100) . '.png';
            $photo = new Photo();
            $photo->file_name = $element['fileName'];
            $photo->order_id = $order->id;
            $photo->format = $element['format'];
            $photo->ending = $element['ending'];
            $photo->count = $element['count'];
            $photo->save();
        }
        foreach ($rows as $key => $value) {
            $item = new Item();
            $item->name = $value['type'];
            $item->price = $value['psc'];
            $item->total = $value['price'];
            $item->order_id = $order->id;
            $item->count = $value['count'];
            $item->save();
        }
        return redirect()->route('form.create')->with('success', 'Zdjęcia zostały przesłane');
    }
}
