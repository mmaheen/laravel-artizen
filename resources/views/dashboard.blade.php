@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <a href="{{ route('products.index') }}">Product List</a>
    <a href="{{ route('products.create') }}">Create Product</a>

@endsection
