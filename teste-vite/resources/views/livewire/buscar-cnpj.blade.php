<div>

        <div class="mb-4">
            <label for="cnpj" class="block text-gray-300 text-sm font-bold mb-2" :value="__('CNPJ') " >CNPJ</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="cnpj"  name="cnpj" :value="old('cnpj')" wire:model.lazy="cnpj" placeholder="Insira o CNPJ (Apenas números)" />
            @error('cnpj')
            <span class="bg-red-500 text-white rounded-md p-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="razao_social" class="block text-gray-300 text-sm font-bold mb-2">Razão Social</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="razao_social"  name="razao_social" :value="old('razao_social')" wire:model="razao_social">
            @error('razao_social')
            <span class="bg-red-500 text-white rounded-md p-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="cnae_fiscal_descricao" class="block text-gray-300 text-sm font-bold mb-2">Nome Fantasia</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="cnae_fiscal_descricao"  name="cnae_fiscal_descricao" :value="old('cnae_fiscal_descricao')"  wire:model="cnae_fiscal_descricao">
            @error('cnae_fiscal_descricao')
            <span class="bg-red-500 text-white rounded-md p-1">{{ $message }}</span>
            @enderror
        </div> 
        <div class="mb-4">
            <label for="descricao_situacao_cadastral" class="block text-gray-300 text-sm font-bold mb-2">Situação</label>
            <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="descricao_situacao_cadastral"  name="descricao_situacao_cadastral" :value="old('descricao_situacao_cadastral')" wire:model="descricao_situacao_cadastral">
            @error('descricao_situacao_cadastral')
            <span class="bg-red-500 text-white rounded-md p-1">{{ $message }}</span>
            @enderror
        </div>
       
      
        
</div>

