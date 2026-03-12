@extends('layouts.app')

@section('content')

<h2>{{ $category->name }}</h2>

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
            edit
        </a>

    </li>

    @endforeach

</ul>

@endif

<a href="{{ route('product.create') }}">Add</a>
<x-back-button />

@endsection