<h2>Add Category</h2>

<form method="POST" action="{{ route('category.store') }}">
    @csrf

    <label>Name</label>
    <input type="text" name="name">

    <button type="submit">Save</button>

</form>
<x-back-button />