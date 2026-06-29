@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <x-frontend.products :products="$products" />

@endsection
