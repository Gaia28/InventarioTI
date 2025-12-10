<div class="p-6">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Inventário de TI - Computadores</h2>

    {{-- BARRA DE BUSCA E CONTROLE (Apenas a Estrutura) --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">

        {{-- CAMPO DE BUSCA (Estático) --}}
        <div class="w-full md:w-1/3">
            <input type="text" placeholder="Buscar por Tombamento, Usuário ou Setor..." wire:model.live="search"
                class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

        {{-- BOTÃO DE NOVO CADASTRO (INATIVO) --}}
        <a href="{{ route('inventario.create') }}"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150 cursor-pointer"
            title="Novo Cadastro - Link Inativo">
            + Novo Computador
        </a>
    </div>

    {{-- TABELA DE DADOS (Estática com Dados de Exemplo) --}}
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuario
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Lotação</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SO /
                        Processador</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ações
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                {{-- Linha de Dados de Exemplo 1 --}}
                @foreach ($this->computadores as $computador)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $computador->nome_maquina }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $computador->ip }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $computador->operador }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $computador->lotacao ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $computador->sistema_operacional }}
                            / {{ $computador->processador }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <a href="{{ route('inventario.show', $computador->id) }}"
                                class="text-indigo-600 hover:text-indigo-900 font-semibold">
                                Detalhes
                            </a>
                            <a href="{{ route('inventario.edit', $computador->id) }}"
                                class="text-indigo-600 hover:text-indigo-900 font-semibold">
                                Editar
                            </a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    {{-- PAGINAÇÃO (Estática) --}}
    <div class="mt-4 flex justify-between items-center">
        <div class="text-sm text-gray-600">
            Exibindo 1 a 10 de 150 resultados
        </div>

        <div class="flex space-x-1">
            <a href="#"
                class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Anterior</a>
            <a href="#" class="px-3 py-1 text-sm text-white bg-indigo-600 border border-indigo-600 rounded-lg">1</a>
            <a href="#"
                class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">2</a>
            <a href="#"
                class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Próxima</a>
        </div>
    </div>
</div>