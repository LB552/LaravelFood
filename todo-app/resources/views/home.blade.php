@extends('layouts.app')

@section('content')

<h2>Grocery Categories</h2>

@foreach ($categories as $category)

<div>

    <a href="{{ route('category.show', $category->id) }}">
        {{ $category->name }}
    </a>

    <a href="{{ route('category.edit', $category->id) }}">
        edit
    </a>

</div>

@endforeach

<br>

<a href="{{ route('category.create') }}" style="
    display:inline-block;
    padding:8px 14px;
    background:#e0e0e0;
    color:#333;
    text-decoration:none;
    border-radius:6px;
    margin-bottom:15px;
    margin-left:15px;
">Add</a>

@endsection