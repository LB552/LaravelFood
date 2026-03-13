@extends('layouts.app')

@section('content')

<h2>Grocery Categories</h2>

<div>
@foreach ($categories as $category)


    <section>
    <a href="{{ route('category.show', $category->id) }}">
        {{ $category->name }}
    </a>

    <a href="{{ route('category.edit', $category->id) }}">
       - Edit
    </a>
    </section>


@endforeach
</div>
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