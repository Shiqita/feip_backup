<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Faker\Factory;
use Illuminate\View\View;
use PharIo\Manifest\Application;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $slug = null): View|Factory|Application
    {
        $query = ProductCategory::query()->with('children', 'products');

        if ($slug === null) {
            $query->where('parent_id');
        } else {
            $query->where('slug', $slug);
        }

        $categories = $query->get();

        try {
            $products = ProductCategory::getTreeProductBuilder($categories)
                ->orderBy('id')
                ->paginate();
        } catch (Exception $exception) {
            abort(422, $exception->getMessage());
        }

        return view('catalog.index', ['categories' => $categories, 'products' => $products]);
    }
}
