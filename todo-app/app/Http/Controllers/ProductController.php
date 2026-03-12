<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show a single product in a category
     */
    public function show(Category $category, Product $product)
    {
        return view('product', compact('category', 'product'));
    }

    /**
     * Show the form to create a new product
     */
    public function create()
    {
        $categories = Category::all();
        return view('product_add', compact('categories'));
    }

    /**
     * Store a new product
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'required|image'
        ]);

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('products'), $filename);

        Product::create([
            'name'        => $request->name,
            'image'       => 'products/' . $filename,
            'price'       => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('category.show', $request->category_id);
    }

    /**
     * Show the form to edit a product
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product_edit', compact('product', 'categories'));
    }

    /**
     * Update a product
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image'
        ]);

        $data = $request->only(['name', 'price', 'description', 'category_id']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('products'), $filename);
            $data['image'] = 'products/' . $filename;
        }

        $product->update($data);

        return redirect()->route('product.show', [$product->category_id, $product->id]);
    }

    /**
     * Delete a product
     */
    public function destroy(Product $product)
    {
        $categoryId = $product->category_id;

        if (file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        $product->delete();

        return redirect()->route('category.show', $categoryId);
    }
}
