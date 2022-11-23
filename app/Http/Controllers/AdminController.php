<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function admin()
    {
        $productObject = Product::all();
        $categoriesObject = Category::all();
        return view('admin.index', compact('productObject', 'categoriesObject'));
    }

    public function addProduct(Request $request)
    {
        $title = $request->input('title');
        $desc = $request->input('desc');
        $old_price = $request->input('old_price');
        $price = $request->input('price');
        $sale = $request->input('sale');
        $code = $request->input('code');
        $category_id = $request->input('category_id');

        DB::table('products')->insert(
            ['title' => $title, 'desc' => $desc, 'old_price' => $old_price,
                'price' => $price, 'sale' => $sale, 'code' => $code, 'category_id' => $category_id]
        );

        return Redirect::to('/admin');
    }

    public function PRSubmitAdmin($product, Request $request)
    {
        $title = $request->input('title');
        $desc = $request->input('desc');
        $old_price = $request->input('old_price');
        $price = $request->input('price');

        DB::table('products')->where('id', $request->input('id'))
            ->update(['title' => $title, 'desc' => $desc, 'old_price' => $old_price, 'price' => $price]);

        return Redirect::to('/admin');
    }

    public function PRDelAdmin($product, Request $request)
    {
        DB::table('products')->where('id', '=', $request->input('id'))->delete();
        return Redirect::to('/admin');
    }

    public function adminProducts()
    {
        $productObject = Product::all();
        $categoriesObject = Category::all();
        return view('admin.index', compact('productObject', 'categoriesObject'));
    }

    public function adminGeneral() {
        return view("admin.general");
    }
}
