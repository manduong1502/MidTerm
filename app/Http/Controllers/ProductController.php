<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id) {
        $product = Product::find($id); // Tìm sản phẩm dựa trên ID
    
        return view('pages.chitiet', ['product' => $product]);
    }

    public function search(Request $request) {
        $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ input
        $products = Product::where('name', 'like', '%' . $query . '%')->get();
    
        return view('pages.search', ['products' => $products, 'query' => $query]);
    }
}
