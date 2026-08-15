<x-layout title="Add Product">
    <div class="card bg-neutral text-neutral-content shadow-xl w-full max-w-md">
        <div class="card-body p-8">
            <h2 class="text-2xl font-bold text-center mb-1">Add Product</h2>
            <p class="text-sm text-gray-400 text-center mb-6">Fill in the details below</p>

            <form action="{{ route('products.store') }}" method="POST" class="flex flex-col gap-5">
                @csrf

                <fieldset class="fieldset">
                    <label class="label text-gray-300 font-medium mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Toyota Vios"
                        class="input input-bordered w-full bg-white text-gray-900 placeholder-gray-400 @error('name') input-error @enderror" />
                    @error('name')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <label class="label text-gray-300 font-medium mb-1">Description</label>
                    <textarea name="description" rows="3" placeholder="Short description of the product"
                        class="textarea textarea-bordered w-full bg-white text-gray-900 placeholder-gray-400 @error('description') textarea-error @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="fieldset">
                    <label class="label text-gray-300 font-medium mb-1">Price (₱)</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price') }}" placeholder="0.00"
                        class="input input-bordered w-full bg-white text-gray-900 placeholder-gray-400 @error('price') input-error @enderror" />
                    @error('price')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex justify-center gap-3 mt-3">
                    <a href="{{ route('products.index') }}" class="btn btn-neutral rounded-full px-6">Cancel</a>
                    <button type="submit" class="btn btn-primary rounded-full px-6">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>