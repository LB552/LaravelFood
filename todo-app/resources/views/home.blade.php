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

<a href="{{ route('category.create') }}">Add</a>

@endsection