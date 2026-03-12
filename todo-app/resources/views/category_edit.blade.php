<h2>Edit Category</h2>

<form method="POST" action="{{ route('category.update',$category->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}">

    <button type="submit">Update</button>

</form>

<form method="POST" action="{{ route('category.destroy',$category->id) }}">
    @csrf
    @method('DELETE')

    <button type="submit" style="
    display:inline-block;
    padding:8px 14px;
    background:#e0e0e0;
    color:#333;
    text-decoration:none;
    border-radius:6px;
    margin-bottom:15px;
    margin-left:15px;
">Delete</button>

</form>
<x-back-button />