<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// Pastikan menggunakan Intervention Image v3
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CkeditorController extends Controller
{
    public function uploadCkeditor(Request $request)
    {
        // 1. Validasi
        if (!$request->hasFile('upload')) {
            return response()->json([
                'error' => ['message' => 'No file uploaded']
            ], 400);
        }

        $request->validate([
            'upload' => 'image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        try {
            // 2. Setup Image Manager (Driver GD)
            $manager = new ImageManager(new Driver());
            $image = $request->file('upload');

            // 3. Buat nama file unik
            $filename = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME))
                        . '-' . time() . '.webp';

            // 4. Pastikan folder ada
            $path = storage_path('app/public/articles/ckeditor/' . $filename);

            if (!is_dir(dirname($path))) {
                mkdir(dirname($path), 0755, true);
            }

            // 5. Proses Gambar (Resize & Convert ke WebP)
            $manager->read($image)
                ->scaleDown(width: 1200) // Menggunakan named parameter biar lebih aman
                ->toWebp(quality: 80)
                ->save($path);

            // 6. Return response sesuai format CKEditor
            return response()->json([
                'url' => asset('storage/articles/ckeditor/' . $filename)
            ]);


        } catch (\Exception $e) {
            // Tangkap error jika permission gagal atau driver tidak ada
            return response()->json([
                'error' => ['message' => 'Server Error: ' . $e->getMessage()]
            ], 500);
        }
    }
}
