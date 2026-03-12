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

    <button type="submit">Delete</button>

</form>
<x-back-button />