<div class="p-6">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Usuários</h2>

    {{-- BARRA DE BUSCA E CONTROLE (ESTÁTICO) --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
        <div class="w-full md:w-1/3">
            <input 
                type="text" 
                placeholder="Buscar por nome, e-mail ou cargo..."
                class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                value="Simulação de busca..."
                disabled
            >
        </div>

        <a href="#" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150 opacity-90"
           title="Novo Usuário (inativo)"
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cargo</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                {{-- Exemplo 1 --}}
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Matheus Gaia</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">matheus.gaia@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Admin</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
                        <button onclick="simulateReset('ana.beatriz@example.com')" class="text-red-600 hover:text-red-900">Redefinir senha</button>
                    </td>
                </tr>

                {{-- Exemplo 2 --}}
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fabio Feio</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">fabio.feio@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Usuário</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
                        <button onclick="simulateReset('bruno.lima@example.com')" class="text-red-600 hover:text-red-900">Redefinir senha</button>
                    </td>
                </tr>

                {{-- Exemplo 3 --}}
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rafael Lopes</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">rafael.lopes@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Admin</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
                        <button onclick="simulateReset('carla.souza@example.com')" class="text-red-600 hover:text-red-900">Redefinir senha</button>
                    </td>
                </tr>

                {{-- Linha placeholder p/ demonstrar mais registros --}}
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500 italic">... o resto dos registros ...</td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- PAGINAÇÃO (ESTÁTICA) --}}
    <div class="mt-4 flex justify-between items-center">
        <div class="text-sm text-gray-600">Exibindo 1 a 10 de 42 resultados</div>

        <div class="flex space-x-1">
            <a href="#" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Anterior</a>
            <a href="#" class="px-3 py-1 text-sm text-white bg-indigo-600 border border-indigo-600 rounded-lg">1</a>
            <a href="#" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">2</a>
            <a href="#" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Próxima</a>
        </div>
    </div>
</div>