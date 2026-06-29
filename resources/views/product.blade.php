@extends('layouts.app')
@section('title', $product->name)

@section('content')
    <div class="flex gap-5 m-4">

        <img class="max-w-3xl" src="{{ asset('storage/uploads/products/' . $product->image) }}" alt="{{ $product->name }}">

        <div>
            <h3 class="text-2xl font-semibold text-indigo-950 mb-2">
                {{ $product->name }}
            </h3>
            <p class="mb-2 text-justify">
                {{ $product->description }}
            </p>
            <p class="mb-2">
                <b>Price:</b> {{ $product->currency }}{{ $product->price }}
            </p>
            <p class="mb-2">
                <b>Stock:</b> {{ $product->stock }} units
            </p>
            <button
                class="bg-blue-600 hover:bg-blue-700 hover:scale-105 text-white font-medium px-4 py-2 rounded-lg transition-all ease-in-out duration-300">Order
                now</button>
        </div>
    </div>



@endsection
