<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function getCategory()
    {
        $category = Category::where('id', $this->category_id)->get();
        dd($category);
    }
}
