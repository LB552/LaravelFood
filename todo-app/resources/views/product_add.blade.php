@extends('layouts.app')

@section('content')

<h2>Add Product</h2>

<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Name</label>
        <input type="text" name="name" required>
    </div>

    <br>

    <div>
        <label>Image</label>
        <input type="file" name="image" required>
    </div>

    <br>

    <div>
        <label>Price</label>
        <input type="number" step="0.01" name="price" required>
    </div>

    <br>

    <div>
        <label>Description</label>
        <textarea name="description" required></textarea>
    </div>

    <br>

    <div>
        <label>Category</label>

        <select name="category_id" required>

            @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

            @endforeach

        </select>

    </div>

    <br>

    <button type="submit" style="
    display:inline-block;
    padding:8px 14px;
    background:#e0e0e0;
    color:#333;
    text-decoration:none;
    border-radius:6px;
    margin-bottom:15px;
    margin-left:15px;
">Add Product</button>

</form>
<x-back-button />
@endsection