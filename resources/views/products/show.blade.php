@extends('layouts.default')

@section('content')

<h1 class="text-5xl font-semibold text-center text-gray-900 dark:text-white sm:text-6xl md:text-7xl">{{$title}}</h1>

<label for="name" class="dark:text-white">Name</label>
{{$product->name}}
</br>
<label for="price" class="dark:text-white">Price</label>
<span class="dark:text-white">{{$product->price}}</span>
</br>
<label for="description" class="dark:text-white">Description</label>
<span class="dark:text-white">{{$product->description}}</span>
</br>
<a href="{{route('products.index')}}">Back</a>

@endsection