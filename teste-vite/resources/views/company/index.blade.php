<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Workshops') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                  
  
  
                  <div class="container flex justify-center mx-auto">
                    <div class="flex flex-col">
                      <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                          <table class="divide-y divide-green-400 ">
                            <thead class="bg-gray-50">
                              <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">COMANDO REGIONAL</th>
                                 <th class="px-6 py-2 text-xs text-gray-500">BATALHÃO</th>
                                 <th class="px-6 py-2 text-xs text-gray-500">COMPANHIA</th>
                                 <th class="px-6 py-2 text-xs text-gray-500">NOME ABREVIADO</th>
                                <th class="px-6 py-2 text-xs text-gray-500"> Editar </th>
                                <th class="px-6 py-2 text-xs text-gray-500">Excluir </th>
                              </tr>
                            </thead>
  
  
                            <tbody class="bg-white divide-y divide-gray-400">
  
                        
                              @forelse ( $companies as $company)
  
                              <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-700">{{$company->sub_command->regional_command->slug}}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{$company->sub_command->slug}}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{$company->name}}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{$company->slug}}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{$company->pelotao}}</td>
                               
                                
                                <td class="px-6 py-4">
                                  <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path troke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/> </svg> </a>
                                </td>
                                <td class="px-6 py-4">
                                  <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"viewBox="0 0 24 24"stroke="currentColor">
                                    <path  stroke-linecap="round" stroke-linejoin="round"  stroke-width="2"d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/> </svg> </a>
                                </td>
                              </tr>
                             
                              @empty
                              <span aria-colspan="col-span-5">
                                NÃO HÁ COMPANHIAS CADASTRADAS
                              </span>
                                
                              @endforelse
                               </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
  