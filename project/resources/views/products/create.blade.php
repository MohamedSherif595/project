<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    @error('name') <div class="error">{{ $message }}</div> @enderror

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" value="{{ old('price') }}" required>
    @error('price') <div class="error">{{ $message }}</div> @enderror

    <label for="image">Image:</label>
    <input type="file" name="image" id="image" required>
    @error('image') <div class="error">{{ $message }}</div> @enderror

    <button type="submit">Create Product</button>
</form>
