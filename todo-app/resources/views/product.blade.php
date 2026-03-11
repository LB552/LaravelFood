@extends('layouts.app')

@section('content')

<h2>{{ $product->name }}</h2>

<img src="{{ asset('storage/' . $product->image) }}" width="200">

<p>{{ $product->description }}</p>
<p>${{ $product->price }}</p>

<a href="{{ route('product.edit', $product->id) }}">edit</a>

@endsection