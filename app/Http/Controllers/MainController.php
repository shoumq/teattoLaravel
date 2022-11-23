<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $productSale = Product::orderBy('id', 'desc')->take(4)->get();
        return view('index', compact('productSale'));
    }

    public function category($category)
    {
        $categoryObject = Category::where('code', $category)->first();
        $products = Product::where('category_id', $categoryObject->id)->get();
        return view('market', compact('categoryObject', 'products'));
    }

    public function categories()
    {
        $categoryAll = Category::all();
        return view('categories', compact('categoryAll'));
    }

    public function product($product)
    {
        $productObject = Product::where('code', $product)->first();
        return view('product', compact('productObject'));
    }

    public function succes()
    {
        return view('succes');
    }

    public function PLSubmit(Request $request)
    {

        $email = $request->input("email");
        $phone = $request->input("email");


        $msg = "%0ATeatto - Прайс Лист%0AEmail: " . $email .
            "%0AТелефон: " . $phone;

        file_get_contents("https://api.telegram.org/bot5425154635:AAFv6UwCnIKv39nrT34ynC6Dd7LyPtfZCZA/sendMessage?chat_id=-745363422&text=" . $msg);

        return Redirect::to('/');
    }

    public function BSubmit(Request $request)
    {
        $product_id = $request->input("product_id");
        $product_title = $request->input("product_title");
        $product_price = $request->input("product_price");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $address = $request->input("address");
        $comment = $request->input("comment");
        $count = $request->input("product_count");


        $msg = "%0ATeatto - Покупка%0AEmail: " . $email .
            "%0AТелефон: " . $phone .
            "%0AАдрес: " . $address .
            "%0AКомметарий: " . $comment .
            "%0AЦена: " . $product_price .
            "%0AНазвание: " . $product_title .
            "%0AКоличество: " . $count .
            "%0AID: " . $product_id;

        file_get_contents("https://api.telegram.org/bot5425154635:AAFv6UwCnIKv39nrT34ynC6Dd7LyPtfZCZA/sendMessage?chat_id=-745363422&text=" . $msg);

        return Redirect::to('/');
    }

    public function sales()
    {
        $productObject = Product::where('sale', 1)->get();
        return view('sales', compact('productObject'));
    }

    public function search(Request $request)
    {
        $s = $request->input("searchInput");
        $args = Product::where('title', 'LIKE', "%{$s}%")->get();
        return view('search', compact('args', 's'));
    }

    public function reg() {
        return view('auth.register');
    }

    public function saved()
    {
        return view("saved");
    }
}
