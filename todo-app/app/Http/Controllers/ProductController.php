<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show(Category $category, Product $product)
    {
        return view('product', compact('category', 'product'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('product_add', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image'
        ]);

        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'image' => $path,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('category.show', $request->category_id);
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('product_edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->only(['name', 'price', 'description', 'category_id']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

        return redirect()->route('product.show', [$product->category_id, $product->id]);
    }

    public function destroy(Product $product)
    {
        $category = $product->category_id;

        $product->delete();

        return redirect()->route('category.show', $category);
    }
}
