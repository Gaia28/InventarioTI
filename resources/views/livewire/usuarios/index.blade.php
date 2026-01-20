<div class="p-6">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Usuários</h2>

    {{-- BARRA DE BUSCA E CONTROLE (ESTÁTICO) --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
        <div class="w-full md:w-1/3">
            <input 
                type="text" 
                wire:model.live="search"
                placeholder="Buscar por nome, e-mail ou cargo..."
                class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
               
            >
        </div>

       <a href="{{ route('usuarios.create') }}"
    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150 opacity-90"
    title="Cadastrar novo usuário"
>
    + Novo Usuário
</a>    
    </div>

    {{-- TABELA (ESTÁTICA) --}}
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Setor/DPTO</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
               @foreach ($usuarios as $usuario)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $usuario->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $usuario->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $usuario->setor->nome ?? 'N/A' }} / {{ $usuario->departamento->nome ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 font-semibold">Editar</a>
                    </td>
                </tr>
               
               @endforeach
            </tbody>
        </table>
    </div>

    {{-- PAGINAÇÃO (ESTÁTICA) --}}
    <div class="mt-4 flex justify-between items-center">

                {{ $usuarios->links('vendor/livewire/paginate') }}
       
        
        
    </div>
</div>