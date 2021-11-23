<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function CreateProduct()
    {
        return view ('backend.pages.create-product');
    }
    public function ProductList()
    {
        return view ('backend.pages.product-list');
    }
}
