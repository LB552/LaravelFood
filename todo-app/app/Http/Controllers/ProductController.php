<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        'candy' => ['lollipop'],
        'caviar' => [],
        'dairy' => ['milk', 'cheese'],
        'fruit' => ['banana', 'melon', 'orange'],
        'meat' => ['hot-dog']
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($category, $product)
    {
        if (!array_key_exists($category, $this->products)) {
            abort(404);
        }

        if (!in_array($product, $this->products[$category])) {
            abort(404);
        }

        return view('product', [
            'category' => $category,
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
