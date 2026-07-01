    @extends('layouts.app')

    @section('title', 'Product List')

    @section('content')

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">#</th>
                        <th class="px-4 py-3 text-left">Product</th>
                        <th class="px-4 py-3 text-left">Price</th>
                        <th class="px-4 py-3 text-left">Stock</th>
                        <th class="px-4 py-3 text-center">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">

                    @foreach ($products as $index => $product)
                        <tr class="even:bg-gray-100 hover:bg-blue-50 transition-colors">

                            <td class="px-4 py-3">
                                {{ $index + 1 }}
                            </td>
                            <!-- Product -->
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <img class="w-16 h-16 object-cover rounded-lg"
                                        src="{{ asset('storage/uploads/products/' . $product->image) }}"
                                        alt="{{ $product->name }}">

                                    <h4 class="font-semibold text-gray-800">
                                        {{ $product->name }}
                                    </h4>
                                </div>
                            </td>

                            <!-- Price -->
                            <td class="px-4 py-3">
                                {{ $product->currency }}{{ number_format($product->price, 2) }}
                            </td>

                            <!-- Stock -->
                            <td class="px-4 py-3">
                                {{ $product->stock }}
                            </td>

                            <!-- Action -->
                            <td class="px-4 py-3">
                                <div class="flex justify-center items-center gap-2">

                                    <!-- Show -->
                                    <a href="{{ route('products.show', $product) }}"
                                        class="p-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition"
                                        title="Show">
                                        <x-lucide-eye class="w-5 h-5" />
                                    </a>

                                    <!-- Edit -->
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="p-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg transition"
                                        title="Edit">
                                        <x-lucide-pencil class="w-5 h-5" />
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('Delete this product?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="p-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition"
                                            title="Delete">

                                            <x-lucide-trash-2 class="w-5 h-5" />

                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
                <tfoot class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">#</th>
                        <th class="px-4 py-3 text-left">Product</th>
                        <th class="px-4 py-3 text-left">Price</th>
                        <th class="px-4 py-3 text-left">Stock</th>
                        <th class="px-4 py-3 text-center">Action</th>
                    </tr>
                </tfoot>
            </table>

            <div class="mt-6">
                {{ $products->links() }}
            </div>
        </div>

    @endsection
