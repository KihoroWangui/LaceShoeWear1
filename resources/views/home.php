@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">

   
    <h2 class="text-2xl font-bold mb-4">Categories</h2>
    <div class="grid grid-cols-3 gap-4 mb-8">
        @foreach($categories as $category)
        <a href="{{ route('category.show', $category->id) }}" class="bg-white p-4 rounded shadow hover:shadow-lg transition">
            <h3 class="font-semibold text-lg">{{ $category->name }}</h3>
        </a>
        @endforeach
    </div>

 
    <h2 class="text-2xl font-bold mb-4">Featured Products</h2>
    <div class="grid grid-cols-3 gap-6">
        @foreach($featuredProducts as $product)
        <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover mb-2">
            <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
            <p class="text-gray-600">${{ $product->price }}</p>
            <a href="{{ route('product.show', $product->id) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View</a>
        </div>
        @endforeach
    </div>

</div>
@endsection
