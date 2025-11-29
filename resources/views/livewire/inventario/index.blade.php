<div class="p-6">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Inventário de TI - Computadores</h2>
    
    {{-- BARRA DE BUSCA E CONTROLE (Apenas a Estrutura) --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
        
        {{-- CAMPO DE BUSCA (Estático) --}}
        <div class="w-full md:w-1/3">
            <input 
                type="text" 
                placeholder="Buscar por Tombamento, Usuário ou Setor..."
                class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                value="Simulação de Busca..."
            >
        </div>
        
        {{-- BOTÃO DE NOVO CADASTRO (INATIVO) --}}
        <a href="#" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150 cursor-pointer" 
           title="Novo Cadastro - Link Inativo"
        >
            + Novo Computador
        </a>
    </div>

    {{-- TABELA DE DADOS (Estática com Dados de Exemplo) --}}
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tombamento</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuário</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Setor/DPT</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SO / Processador</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                
                {{-- Linha de Dados de Exemplo 1 --}}
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        PAT-1001-PC
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        Maria da Silva
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        Vendas / Comercial
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        192.168.1.10
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Win 10 Pro / Core i5
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-900">Ver</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ml-4">Editar</a>
                    </td>
                </tr>

                {{-- Linha de Dados de Exemplo 2 --}}
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        PAT-1002-PC
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        João Almeida
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        Suporte / TI
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        192.168.1.11
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Ubuntu 22.04 / Core i7
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-900">Ver</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ml-4">Editar</a>
                    </td>
                </tr>
                
                {{-- Linha de Dados de Exemplo 3 --}}
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500 italic">
                        ... Mais linhas de inventário iriam aqui ...
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- PAGINAÇÃO (Estática) --}}
    <div class="mt-4 flex justify-between items-center">
        <div class="text-sm text-gray-600">
            Exibindo 1 a 10 de 150 resultados
        </div>
        
        <div class="flex space-x-1">
            <a href="#" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Anterior</a>
            <a href="#" class="px-3 py-1 text-sm text-white bg-indigo-600 border border-indigo-600 rounded-lg">1</a>
            <a href="#" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">2</a>
            <a href="#" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Próxima</a>
        </div>
    </div>
</div>