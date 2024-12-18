<?php

namespace App\Http\Controllers;

use App\Models\Photo; // Import model Photo
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua foto dari database
        $photos = Photo::all();

        // Kirim data ke view products
        return view('products', compact('photos'));
    }
}
