@extends('layouts.app')

@section('content')

<h2>Grocery Categories</h2>

<div class="category-list">
    @foreach ($categories as $category)
    <div class="category-item">
        <a href="{{ route('category.show', $category) }}">
            {{ ucfirst($category) }}
        </a>
    </div>
    @endforeach
</div>

@endsection