@extends('layouts.app')

@section('content')

<h2>Edit Product</h2>

<form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
    </div>

    <br>

    <div>
        <label>Current Image</label><br>
        <img src="{{ asset('storage/' . $product->image) }}" width="200">
    </div>

    <br>

    <div>
        <label>Replace Image</label>
        <input type="file" name="image">
    </div>

    <br>

    <div>
        <label>Price</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
    </div>

    <br>

    <div>
        <label>Description</label>
        <textarea name="description" required>{{ $product->description }}</textarea>
    </div>

    <br>

    <div>
        <label>Category</label>

        <select name="category_id">

            @foreach($categories as $category)

            <option value="{{ $category->id }}"
                @if($category->id == $product->category_id) selected @endif
                >
                {{ $category->name }}
            </option>

            @endforeach

        </select>

    </div>

    <br>

    <button type="submit">Update Product</button>

</form>

<br>

<form method="POST" action="{{ route('product.destroy', $product->id) }}">
    @csrf
    @method('DELETE')

    <button type="submit">Delete Product</button>

</form>
<x-back-button />
@endsection