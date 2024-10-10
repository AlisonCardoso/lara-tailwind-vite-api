<div>

        <div class="mb-4">
            <label for="cnpj" class="block text-gray-300 text-sm font-bold mb-2" :value="__('CNPJ') " >CNPJ</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="cnpj" wire:model.lazy="cnpj" placeholder="Insira o CNPJ (Apenas números)" />
            @error('cnpj')
            <span class="mt-2 ">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="razao_social" class="block text-gray-300 text-sm font-bold mb-2">Razão Social</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="razao_social" wire:model="razao_social">
            @error('razao_social')
            <span class="badge bg-warning">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="nome_fantasia" class="block text-gray-300 text-sm font-bold mb-2">Nome Fantasia</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="nome_fantasia" wire:model="nome_fantasia">
            @error('nome_fantasia')
            <span class="badge bg-warning">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="descricao_situacao_cadastral" class="block text-gray-300 text-sm font-bold mb-2">Situação</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="descricao_situacao_cadastral" wire:model="descricao_situacao_cadastral">
            @error('descricao_situacao_cadastral')
            <span class="badge bg-warning">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="cnae_fiscal_descricao" class="block text-gray-300 text-sm font-bold mb-2">Descrição</label>
            <textarea rows="4" placeholder="digite um descrição (opcional)" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white"
            id="cnae_fiscal_descricao" wire:model="cnae_fiscal_descricao">
            @error('cnae_fiscal_descricao')
            <span class="badge bg-warning">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue"
             type="button" wire:click="save" >Salvar Empresa</button>
        </div>
        <div>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md hover
        :focus:shadow-outline-blue" type="button" wire:click="cancel">Cancelar</
        button>
        </div>
</div>

