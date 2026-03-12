@extends('layouts.app')

@section('content')

<h2>{{ $product->name }}</h2>

<img src="{{ asset('storage/' . $product->image) }}" width="200">

<p>{{ $product->description }}</p>
<p>${{ number_format($product->price, 2) }}</p>

<a href="{{ route('product.edit', $product->id) }}">edit</a>
<x-back-button />
@endsection