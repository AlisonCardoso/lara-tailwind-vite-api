@extends('layout.master')

@section('title', 'Cadastro de Oficina')

@section('header-title', 'Bem-vindo ao Cadastro')
@section('header-description', 'Preencha os campos abaixo para se cadastrar.')

@section('content')

    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12 mt-12"> <!-- Adicionei mt-12 para espaço acima -->
        <div class="bg-gray-900 w-full shadow rounded p-8 sm:p-12">
           
            <form class="border-b-2 pb-10 mt-5" method="post" action="@if (isset($edit->id)){{ route('workshops.update', ['id' => $edit->id]) }}@else{{ route('workshops.store') }} @endif" enctype="multipart/form-data">
                @csrf

                <div class="md:flex items-center mt-12">

                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Nome</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="name" required />
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Telefone</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="phone" required />
                    </div>

                </div>

                <div class="mt-4">
                    <x-input-label for="phone_number" :value="__('Telefone')" />
                    <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="responsavel" :value="__('Responsável')" />
                    <x-text-input id="responsavel" class="block mt-1 w-full" type="text" name="responsavel" :value="old('responsavel')" required autofocus autocomplete="responsavel" />
                    <x-input-error :messages="$errors->get('responsavel')" class="mt-2" />
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Cadastrar
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection
