<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
     // Menampilkan daftar foto
     public function index()
     {
         // Ambil semua foto dari database
         $photos = Photo::all();

         // Kirim data foto ke view
         return view('dashboard', compact('photos'));
     }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan gambar di storage
        $imagePath = $request->file('image')->store('photos', 'public'); // Simpan di storage/app/public/photos

        // Simpan data foto ke database
        Photo::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath, // Simpan path gambar
        ]);

        // Redirect setelah berhasil
        return redirect()->route('photos.index')->with('success', 'Photo uploaded successfully!');
    }

     // Menampilkan halaman edit
     public function edit($id)
     {
         $photo = Photo::findOrFail($id);
         return view('photos.edit', compact('photo'));
     }

     // Menyimpan perubahan foto
     public function update(Request $request, $id)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string',
             'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
         ]);

         $photo = Photo::findOrFail($id);

         // Jika ada gambar baru
         if ($request->hasFile('image')) {
             // Hapus gambar lama
             Storage::delete('public/' . $photo->image);
             // Simpan gambar baru
             $imagePath = $request->file('image')->store('photos', 'public');
             $photo->image = $imagePath;
         }

         // Update data foto
         $photo->update([
             'title' => $request->title,
             'description' => $request->description,
         ]);

         return redirect()->route('photos.index')->with('success', 'Photo updated successfully!');
     }

     // Menghapus foto
     public function destroy($id)
     {
         $photo = Photo::findOrFail($id);

         // Hapus gambar dari storage
         Storage::delete('public/' . $photo->image);

         // Hapus data dari database
         $photo->delete();

         return redirect()->route('photos.index')->with('success', 'Photo deleted successfully!');
     }
}
