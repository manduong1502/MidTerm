<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function getTrangchu(){
        $products = Product::orderBy("id","desc")->get();
        return view("pages.trangchu",compact('products') );
    }
    public function getCart(){
        return view("pages.cart");
    }

    // public function search()
    // {
    //     if(isset($_GET['search'])) {
    //         $search = $_GET['search'];
    //         //điền kiện
    //     $category = Category::orderBy('id','DESC') ->where('status',1)->get();
    //     $genre = Genre::orderBy('id','DESC') ->get();
    //     $country = Country::orderBy('id','DESC') ->get();
    //     //css
    //     $customCss = 'css/tong-the-loai.css';
    //     //điều kiện slug
    //     $movie = Movie::where('title','LIKE','%'.$search.'%')->orderBy('ngay_cap_nhap','DESC')->paginate(40);
    //     return view('pages.tim_kiem', compact(
    //         'customCss',
    //         'category',
    //         'genre',
    //         'country',
    //         'movie',
    //         'search'
    //     ));
    //     }else {
    //         return redirect()->route('pages.trangchu');
    //     }
        
    // }
}
