<x-layout title="Products - Justin Bieber Store">
    <div class="w-full max-w-2xl">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-white">Products</h2>
                <p class="text-sm text-gray-400 mt-1">Manage your product catalog</p>
            </div>
            <a href="{{ route('products.create') }}" class="btn btn-primary rounded-full px-6">
                + Add Product
            </a>
        </div>

        @if ($products->isEmpty())
            <div class="rounded-2xl bg-neutral shadow-md text-center py-16 px-6">
                <p class="text-gray-400 text-lg">No products yet.</p>
                <p class="text-gray-500 text-sm mt-1">Click "Add Product" to create your first one.</p>
            </div>
        @else
            <div class="flex flex-col gap-4">
                @foreach ($products as $product)
                    <div class="rounded-2xl bg-neutral shadow-md hover:shadow-xl transition-shadow p-5">
                        <div class="!flex !flex-row !items-center !justify-between gap-4">

                            <div class="!flex !items-center gap-4 min-w-0 flex-1">
                                <div class="w-11 h-11 shrink-0 rounded-full bg-primary/20 text-primary !flex !items-center !justify-center font-bold text-lg uppercase">
                                    {{ substr($product->name, 0, 1) }}
                                </div>

                                <div class="min-w-0 text-left">
                                    <h4 class="text-base font-semibold text-white truncate text-left">{{ $product->name }}</h4>
                                    <p class="text-sm text-gray-400 truncate text-left">{{ $product->description ?: 'No description' }}</p>
                                </div>
                            </div>

                            <div class="!flex !flex-col items-end gap-2 shrink-0">
                                <span class="text-success font-bold text-sm whitespace-nowrap">
                                    ₱{{ number_format($product->price, 2) }}
                                </span>
                                <div class="!flex gap-2">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="btn btn-xs btn-neutral rounded-full px-3">
                                        Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-xs btn-error rounded-full px-3"
                                            onclick="return confirm('Delete this product?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>