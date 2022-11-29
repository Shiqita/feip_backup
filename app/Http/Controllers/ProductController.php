<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(string $slug): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::query()
            ->with('productCategory','sortedAttributeValues.productAttribute')
            ->where('slug', $slug)
            ->first();


        if($product === null){
            abort(404);
        }

        return view('product.index', ['product' => $product]);
    }
}
