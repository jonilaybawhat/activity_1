<x-layout title="Edit Product">
    <div class="card bg-neutral text-neutral-content shadow-xl w-full max-w-md">
        <div class="card-body p-8">
            <h2 class="text-2xl font-bold text-center mb-1">Edit Product</h2>
            <p class="text-sm text-gray-400 text-center mb-6">Update the details below</p>

            <form action="{{ route('products.update', $product) }}" method="POST" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <fieldset class="fieldset">
                    <label class="label text-gray-300 font-medium mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}"
                        class="input input-bordered w-full bg-white text-gray-900 placeholder-gray-400 @error('name') input-error @enderror" />
                    @error('name')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <label class="label text-gray-300 font-medium mb-1">Description</label>
                    <textarea name="description" rows="3"
                        class="textarea textarea-bordered w-full bg-white text-gray-900 placeholder-gray-400 @error('description') textarea-error @enderror">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <label class="label text-gray-300 font-medium mb-1">Price (₱)</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"
                        class="input input-bordered w-full bg-white text-gray-900 placeholder-gray-400 @error('price') input-error @enderror" />
                    @error('price')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex justify-center gap-3 mt-3">
                    <a href="{{ route('products.index') }}" class="btn btn-neutral rounded-full px-6">Cancel</a>
                    <button type="submit" class="btn btn-primary rounded-full px-6">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>