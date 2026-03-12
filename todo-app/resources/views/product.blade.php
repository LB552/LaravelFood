@extends('layouts.app')

@section('content')

<h2>{{ $product->name }}</h2>

<img src="{{ $product->image_url }}" width="200">

<p>{{ $product->description }}</p>
<p>${{ number_format($product->price, 2) }}</p>

<a href="{{ route('product.edit', $product->id) }}">edit</a>

@endsection