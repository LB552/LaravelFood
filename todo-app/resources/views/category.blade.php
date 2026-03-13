@extends('layouts.app')

@section('content')

<h2>{{ $category->name }}</h2>
<div style="margin-bottom: 1rem;">
    <a href="{{ route('products.index', ['sort' => 'price_asc']) }}" class="btn btn-primary">Price ↑</a>
    <a href="{{ route('products.index', ['sort' => 'price_desc']) }}" class="btn btn-primary">Price ↓</a>

    <a href="{{ route('products.index', ['sort' => 'name_asc']) }}" class="btn btn-secondary">Name A–Z</a>
    <a href="{{ route('products.index', ['sort' => 'name_desc']) }}" class="btn btn-secondary">Name Z–A</a>
</div>
@if($products->count() === 0)
<p>No products in this category.</p>
@else

<ul>

    @foreach ($products as $product)

    <li>

        <a href="{{ route('product.show', [$category->id,$product->id]) }}">
            {{ $product->name }}
        </a>

        <a href="{{ route('product.edit', $product->id) }}">
           - Edit
        </a>

    </li>

    @endforeach

</ul>

@endif

<a href="{{ route('product.create') }}" style="
    display:inline-block;
    padding:8px 14px;
    background:#e0e0e0;
    color:#333;
    text-decoration:none;
    border-radius:6px;
    margin-bottom:15px;
    margin-left:15px;
">Add</a>
<x-back-button />

@endsection