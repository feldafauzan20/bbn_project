<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    /**
     * Mengambil dan memfilter data produk dari file JSON.
     */
    public function getProducts(Request $request)
    {
        // Path ke file JSON
        $jsonPath = storage_path('app/public/products_data.json');

        // Pastikan file JSON ada
        if (!File::exists($jsonPath)) {
            return response()->json(['error' => 'File products_data.json not found.'], 404);
        }

        // Baca dan dekode file JSON
        $productsData = json_decode(File::get($jsonPath), true);
        $products = $productsData['products'];

        // Ambil parameter filter dari request
        $category = $request->query('category');

        // Lakukan filtering jika parameter 'category' ada
        if ($category) {
            $filteredProducts = array_filter($products, function ($product) use ($category) {
                // Lakukan pencocokan category, case-insensitive
                return strtolower($product['category']) === strtolower($category);
            });
            // Kembalikan hasil filter
            return response()->json(array_values($filteredProducts));
        }

        // Jika tidak ada filter, kembalikan semua produk
        return response()->json($products);
    }
    
    /**
     * Mengambil daftar filter dari file JSON.
     */
    public function getFilters()
    {
        // Path ke file JSON
        $jsonPath = storage_path('app/public/products_data.json');

        // Pastikan file JSON ada
        if (!File::exists($jsonPath)) {
            return response()->json(['error' => 'File products_data.json not found.'], 404);
        }

        // Baca dan dekode file JSON
        $productsData = json_decode(File::get($jsonPath), true);
        
        // Ambil dan kembalikan daftar filter
        return response()->json($productsData['filters']);
    }
}