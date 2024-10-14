@extends('layout.master')

@section('title', 'Cadastro de Oficina')

@section('header-title', 'Bem-vindo ao Cadastro')
@section('header-description', 'Preencha os campos abaixo para se cadastrar.')

@section('content')

    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12 mt-12">
        <div class="bg-gray-900 w-full shadow rounded p-8 sm:p-12">
           
            <form class="border-b-2 pb-10 mt-5" method="post" action="{{ isset($edit->id) ? route('workshops.update', $edit->id) : route('workshops.store') }}" enctype="multipart/form-data">
                @csrf

                {{-- Livewire para buscar CNPJ --}}
                @livewire('buscar-cnpj')

                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">E-mail</label>
                        <input type="email" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="email"  />
                    </div>

                    <div class="w-full md:w-1/3 flex flex-col md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Nome do Responsável</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="responsavel" />
                    </div>

                    <div class="w-full md:w-1/3 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label for="phone_number" class="font-semibold leading-none text-gray-300">Telefone</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" id="phone_number" name="phone_number" required />
                    </div>
                </div>
            
                {{-- Livewire para buscar CEP --}}
                @livewire('buscar-cep')

                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label for="number" class="font-semibold leading-none text-gray-300">Número</label>
                        <input type="text" id="number" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="number" required />
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label for="complement" class="font-semibold leading-none text-gray-300">Complemento</label>
                        <input type="text" id="complement" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="complement" />
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button href="{{ route('workshops.index') }}">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                    <x-primary-button type="submit">
                        {{ __('Save') }}
                        </x-primary-button>
                 
                </div>

            </form>
        </div>
    </div>

@endsection
