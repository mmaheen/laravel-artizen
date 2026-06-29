@extends('layouts.app')
@section('title', 'Create product')

@section('content')

    @if ($errors->any())
        <div class="mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset class="max-w-lg mx-auto border border-gray-300 rounded-lg p-6 shadow-md">
            <legend class="px-2 text-xl font-semibold text-blue-700">
                Create Product
            </legend>

            <div class="mb-4">
                <label for="name" class="block mb-2 font-medium text-gray-700">
                    Title
                </label>

                <input type="text" name="name" id="name" placeholder="Enter product title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block mb-2 font-medium text-gray-700">
                    Description
                </label>

                <textarea name="description" id="description" rows="5" placeholder="Enter product description..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- Price -->
                <div>
                    <label for="price" class="block mb-2 font-medium text-gray-700">
                        Price
                    </label>

                    <input type="number" name="price" id="price" step="0.01" min="0"
                        placeholder="Enter price"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Stock -->
                <div>
                    <label for="stock" class="block mb-2 font-medium text-gray-700">
                        Stock
                    </label>

                    <input type="number" name="stock" id="stock" min="0" placeholder="Available quantity"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

            </div>

            <div class="mb-4">
                <label for="image" class="block mb-2 font-medium text-gray-700">
                    Image
                </label>

                <input type="file" name="image" id="image" accept="image/*"
                    class="block w-full text-sm text-gray-700
               file:mr-4 file:py-2 file:px-4
               file:rounded-lg file:border-0
               file:bg-blue-600 file:text-white
               file:font-medium
               hover:file:bg-blue-700
               cursor-pointer">
            </div>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition-all duration-300">
                Create Product
            </button>
        </fieldset>
    </form>

@endsection
