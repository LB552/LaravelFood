<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories = [
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
        return view('home', [
            'categories' => array_keys($this->categories)
        ]);
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
    public function show($slug)
    {
        if (!array_key_exists($slug, $this->categories)) {
            abort(404);
        }

        return view('category', [
            'category' => $slug,
            'products' => $this->categories[$slug]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
