@extends('layouts.default')

@section('content')
    <h1 class="text-5xl font-semibold text-center text-gray-900 dark:text-white sm:text-6xl md:text-7xl">{{ $title }}
    </h1>

    <label for="name" class="dark:text-white">Nom</label>
    {{ $customer->name }}
    </br>
    <label for="firstname" class="dark:text-white">Prénom</label>
    <span class="dark:text-white">{{ $customer->firstname }}</span>
    </br>
    <label for="email" class="dark:text-white">Description</label>
    <span class="dark:text-white">{{ $customer->email }}</span>
    </br>
    <a href="{{ route('customers.index') }}">Back</a>
@endsection
