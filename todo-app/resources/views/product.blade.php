@extends('layouts.app')

@section('content')

<h2>{{ $product->name }}</h2>

<img src="{{ asset('storage/' . $product->image) }}" width="200">

<p>{{ $product->description }}</p>
<p>${{ number_format($product->price, 2) }}</p>

<a href="{{ route('product.edit', $product->id) }}" style="
    display:inline-block;
    padding:8px 14px;
    background:#e0e0e0;
    color:#333;
    text-decoration:none;
    border-radius:6px;
    margin-bottom:15px;
    margin-left:15px;
">edit</a>
<x-back-button />
@endsection