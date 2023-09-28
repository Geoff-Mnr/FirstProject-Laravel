@extends('layouts.default')

@section('content')
    <h1 class="text-5xl font-semibold text-center text-gray-900 dark:text-white sm:text-6xl md:text-7xl">{{ $title }}
    </h1>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">

            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du
                            client</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $customer->name }}" placeholder="" required="">
                    </div>

                    <div class="w-full">
                        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom
                            du client</label>
                        <input type="text" name="firstname" id="firstname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $customer->firstname }}" placeholder="" required="">
                    </div>


                    <div class="sm:col-span-2">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                        <input type="text" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $customer->email }}" placeholder="" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="adress"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse</label>
                        <input type="text" name="adress" id="adress"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $customer->adress }}" placeholder="" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phonenumber"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Téléphone</label>
                        <input type="text" name="phonenumber" id="phonenumber"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $customer->phonenumber }}" placeholder="" required="">
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Modifier
                    </button>

                </div>
            </form>
            <a href="{{ route('customers.index') }}">Back</a>
        </div>
    </section>
@endsection
