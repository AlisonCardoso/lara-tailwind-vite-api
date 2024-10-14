@extends('layout.master')

@section('title', 'Cadastro de Oficina')

@section('header-title', isset($edit) ? 'Edição de Oficina' : 'Bem-vindo ao Cadastro')
@section('header-description', isset($edit) ? 'Atualize os dados abaixo.' : 'Preencha os campos abaixo para se cadastrar.')

@section('content')

<div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12 mt-12">
    <div class="bg-white dark:bg-gray-900 w-full shadow rounded p-8 sm:p-12">
        <form method="POST" action="{{ isset($edit) ? route('workshops.update', ['id' => $edit->id]) : route('workshops.store') }}" enctype="multipart/form-data">
            @csrf
            @if(isset($edit)) @method('PUT') @endif
 @livewire('buscar-cnpj')

            {{--  
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="cnpj" class="block text-gray-800 dark:text-gray-300">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('cnpj', $edit->cnpj ?? '') }}" required>
                    @error('cnpj') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="razao_social" class="block text-gray-800 dark:text-gray-300">Razão Social</label>
                    <input type="text" id="razao_social" name="razao_social" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('razao_social', $edit->razao_social ?? '') }}" required>
                    @error('razao_social') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="cnae_fiscal_descricao" class="block text-gray-800 dark:text-gray-300">Nome Fantasia</label>
                    <input type="text" id="cnae_fiscal_descricao" name="cnae_fiscal_descricao" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('cnae_fiscal_descricao', $edit->cnae_fiscal_descricao ?? '') }}">
                    @error('cnae_fiscal_descricao') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="descricao_situacao_cadastral" class="block text-gray-800 dark:text-gray-300">Situação</label>
                    <input type="text" id="descricao_situacao_cadastral" name="descricao_situacao_cadastral" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('descricao_situacao_cadastral', $edit->descricao_situacao_cadastral ?? '') }}">
                    @error('descricao_situacao_cadastral') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            --}}

            <div class="mb-6">
                <label for="email" class="block text-gray-800 dark:text-gray-300">E-mail</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('email', $edit->email ?? '') }}" required>
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6"> 
            <div class="mb-6">
                <label for="responsavel" class="block text-gray-800 dark:text-gray-300">Nome do Responsável</label>
                <input type="text" id="responsavel" name="responsavel" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('responsavel', $edit->responsavel ?? '') }}" required>
                @error('responsavel') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="phone_number" class="block text-gray-800 dark:text-gray-300">Telefone</label>
                <input type="text" id="phone_number" name="phone_number" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('phone_number', $edit->phone_number ?? '') }}" required>
                @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

@livewire('buscar-cep')

        {{-- 

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
            <div class="mb-6">
                <label for="cep" class="block text-gray-800 dark:text-gray-300">CEP</label>
                <input type="text" id="cep" name="cep" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('cep', $edit->address->cep ?? '') }}" required>
                @error('cep') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="state" class="block text-gray-800 dark:text-gray-300">Estado</label>
                <input type="text" id="state" name="state" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('state', $edit->address->state ?? '') }}" required>
                @error('state') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="city" class="block text-gray-800 dark:text-gray-300">Cidade</label>
                <input type="text" id="city" name="city" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('city', $edit->address->city ?? '') }}" required>
                @error('city') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
          </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                <label for="neighborhood" class="block text-gray-800 dark:text-gray-300">Bairro</label>
                <input type="text" id="neighborhood" name="neighborhood" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('neighborhood', $edit->address->neighborhood ?? '') }}" required>
                @error('neighborhood') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="street" class="block text-gray-800 dark:text-gray-300">Rua</label>
                <input type="text" id="street" name="street" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('street', $edit->address->street ?? '') }}" required>
                @error('street') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            </div>
             --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                <label for="number" class="block text-gray-800 dark:text-gray-300">Número</label>
                <input type="text" id="number" name="number" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('number', $edit->address->number ?? '') }}" required>
                @error('number') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div >
                <label for="complement" class="block text-gray-800 dark:text-gray-300">Complemento</label>
                <input type="text" id="complement" name="complement" class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring focus:ring-blue-500" value="{{ old('complement', $edit->address->complement ?? '') }}">
                @error('complement') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            </div>

            <div class="mt-6 flex justify-end">
                <a href="{{ route('workshops.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md">Cancelar</a>
                <button type="submit" class="ml-3 px-4 py-2 bg-blue-600 text-white rounded-md">{{ isset($edit) ? 'Atualizar' : 'Cadastrar' }}</button>
            </div>
        </form>
    </div>
</div>

@endsection
