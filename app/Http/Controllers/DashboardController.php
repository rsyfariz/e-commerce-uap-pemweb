<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;

class DashboardController extends Controller
{
    public function index()
    {
    $products = Product::with(['productImages', 'productCategory', 'store'])
    ->paginate(12);

    $categories = ProductCategory::withCount('products')->get();

        return view('dashboard', compact('products', 'categories'));
    }
}