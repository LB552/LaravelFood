@extends('layouts.app')

@section('content')

<h2>{{ ucfirst($category) }}</h2>

@if(count($products) === 0)
<p>No products in this category.</p>
@else
<ul>
    @foreach ($products as $product)
    <li>
        <a href="{{ route('product.show', [$category, $product]) }}">
            {{ ucfirst(str_replace('-', ' ', $product)) }}
        </a>
    </li>
    @endforeach
</ul>
@endif

@endsection