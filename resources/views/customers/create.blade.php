@extends('layouts.default')

@section('content')
<h1 class="text-5xl font-semibold text-center text-gray-900 dark:text-white sm:text-6xl md:text-7xl">{{$title}}</h1>
<form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center">
            <label for="name" class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl md:text-4xl">Nom</label>
            <input type="text" name="name" id="name" class="w-96 h-16 text-2xl font-semibold text-gray-900 dark:text-dark sm:text-3xl md:text-4xl" value="{{old('name')}}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="flex flex-col justify-center items-center">
            <label for="firstname" class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl md:text-4xl">Prénom</label>
            <input type="text" name="firstname" id="firstname" class="w-96 h-16 text-2xl font-semibold text-gray-900 dark:text-dark sm:text-3xl md:text-4xl" value="{{old('firstname')}}">
            @error('firstname')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="flex flex-col justify-center items-center">
            <label for="email" class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl md:text-4xl">Email</label>
            <textarea name="email" id="email" cols="30" rows="10" class="w-96 h-96 text-2xl font-semibold text-gray-900 dark:text-dark sm:text-3xl md:text-4xl">
                {{old('email')}}
            </textarea>
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="flex flex-col justify-center items-center">
            <label for="adress" class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl md:text-4xl">Adresse</label>
            <textarea name="adress" id="adress" cols="30" rows="10" class="w-96 h-96 text-2xl font-semibold text-gray-900 dark:text-dark sm:text-3xl md:text-4xl">
                {{old('adress')}}
            </textarea>
            @error('adress')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="flex flex-col justify-center items-center">
            <label for="phonenumber" class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl md:text-4xl">téléphone</label>
            <textarea name="phonenumber" id="adress" cols="30" rows="10" class="w-96 h-96 text-2xl font-semibold text-gray-900 dark:text-dark sm:text-3xl md:text-4xl">
                {{old('phonenumber')}}
            </textarea>
            @error('phonenumber')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Créer</button>
    </div>
</form>
{{-- @stop --}}

@endsection
