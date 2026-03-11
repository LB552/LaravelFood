<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('home', compact('categories'));
    }

    public function show(Category $category)
    {
        $products = $category->products;

        return view('category', compact('category', 'products'));
    }

    public function create()
    {
        return view('category_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('home');
    }

    public function edit(Category $category)
    {
        return view('category_edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('home');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('home');
    }
}
