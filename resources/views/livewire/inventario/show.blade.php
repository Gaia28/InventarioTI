<div class="p-6">
    <div class="flex justify-between items-center mb-6 border-b pb-4">

        
    </div>

    <div class="bg-white shadow-xl rounded-lg p-6 space-y-8">
        
        <div class="flex justify-between items-center mb-6 border-b pb-4">
             <h3 class="text-xl font-semibold  text-indigo-700">Informações Detalhadas do Equipamento</h3>
            <div>
            <a href="#" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg text-sm mr-2 shadow-md">
                Editar Cadastro
            </a>
            <a href="{{ route('inventario.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-lg text-sm shadow-md">
                Voltar à Lista
            </a>
            </div>
       
        
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-6 gap-x-8">

            {{-- 1. IDENTIFICAÇÃO E IP --}}
            <div>
                <p class="text-sm font-medium text-gray-500">Tombamento:</p>
                <p class="text-lg text-gray-900">{{ $computador->tombamento }}</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Endereço IP:</p>
                <p class="text-lg text-gray-900">{{ $computador->ip ?? 'N/A' }}</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Chassi/Carrinho:</p>
                <p class="text-lg text-gray-900">{{ $computador->carrinho ?? 'N/A' }}</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Lotação</p>
                <p class="text-lg text-gray-900">{{ $computador->lotacao ?? 'N/A' }}</p>
            </div>

            {{-- 2. DADOS DO USUÁRIO --}}
            <div class="lg:col-span-3 border-t border-gray-200 pt-4">
                <h4 class="text-lg font-medium text-gray-700 mb-2">Usuário e Localização</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Usuário:</p>
                        <p class="text-lg text-gray-900 ">{{ $computador->usuario?->name ??'N/A'}}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Setor:</p>
                        <p class="text-lg text-gray-900">{{ $computador->usuario?->setor?->nome ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Departamento (DPT):</p>
                        <p class="text-lg text-gray-900">{{ $computador->usuario->departamento->nome ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-3 border-t border-gray-200 pt-4">
                <h4 class="text-lg font-medium text-gray-700 mb-2">Sistema e Hardware</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8">
                    
                    {{-- Sistema Operacional --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Sistema Operacional:</p>
                        <p class="text-lg text-gray-900">{{ $computador->sistema_operacional ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Licença SO --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Licença SO:</p>
                        <p class="text-lg text-gray-900">{{ $computador->licenca_so ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Processador --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Processador:</p>
                        <p class="text-lg text-gray-900">{{ $computador->processador ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Placa Mãe --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Placa Mãe:</p>
                        <p class="text-lg text-gray-900">{{ $computador->placa_mae ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Tamanho Disco --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Armazenamento (Disco):</p>
                        <p class="text-lg text-gray-900">{{ $computador->tamanho_disco ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Memória RAM (Total) --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Memória RAM (Total):</p>
                        <p class="text-lg text-gray-900">{{ $computador->memoria_ram ?? 'N/A' }}</p>
                    </div>

                    {{-- Pente RAM --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Tipo de memória:</p>
                        <p class="text-lg text-gray-900">{{ $computador->tipo_memoria ?? 'N/A' }}</p>
                    </div>

                    {{-- Estabilizador --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Estabilizador:</p>
                        <p class="text-lg text-gray-900">{{ $computador->estabilizador ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 border-t border-gray-200 pt-4">
                <h4 class="text-lg font-medium text-gray-700 mb-2">Periféricos</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8">
                    
                    {{-- Teclado --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Teclado:</p>
                        <p class="text-lg text-gray-900">{{ $computador->teclado ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Mouse --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Mouse:</p>
                        <p class="text-lg text-gray-900">{{ $computador->mouse ?? 'N/A' }}</p>
                    </div>
                    
                    {{-- Qtd. Telas --}}
                    <div>
                        <p class="text-sm font-medium text-gray-500">Telas Cadastradas:</p>
                        <p class="text-lg text-gray-900">{{ $computador->monitores->count() }}</p>
                    </div>
                </div>
            </div>

        </div> 

        {{-- 4. OBSERVAÇÕES --}}
        <div class="border-t border-gray-200 pt-4">
            <h3 class="text-lg font-medium mb-2 text-gray-700">Observações Gerais</h3>
            <div class="bg-gray-50 p-4 rounded-md">
                <p class="text-gray-700 whitespace-pre-line leading-relaxed">{{ $computador->observacoes ?? 'Nenhuma observação registrada.' }}</p>
            </div>
        </div>

        {{-- Tabela de Monitores --}}
        <div class="border-t border-gray-200 pt-4">
            <h3 class="text-lg font-medium mb-3 text-gray-700">Lista de Monitores Associados</h3>
            
            @if ($computador->monitores->count())
                <div class="overflow-x-auto border rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tombamento</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Marca</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tamanho</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Conectividade</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($computador->monitores as $monitor)
                                <tr>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900 font-medium">{{ $monitor->tombamento }}</td>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-600">{{ $monitor->marca }}</td>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-600">{{ $monitor->tamanho_tela }}</td>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-600">{{ $monitor->tipo_conexao }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-gray-500 italic p-3 bg-gray-50 rounded-md">Nenhum monitor cadastrado para este equipamento.</p>
            @endif
        </div>
    </div>
</div>