<div class="p-6">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Novo Cadastro de Computador</h2>

    <form wire:submit.prevent="save" class="space-y-8">

        {{-- SEÇÃO 1: INFORMAÇÕES DE USO E IDENTIFICAÇÃO --}}
        <div class="bg-white shadow-xl rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4 border-b pb-2 text-indigo-700">1. Identificação e Usuário</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Tombamento --}}
                <div>
                    <label for="tombamento" class="block text-sm font-medium text-gray-700">Tombamento (Patrimônio)
                        *</label>
                    <input type="text" id="tombamento" wire:model="tombamento" 
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                {{-- IP --}}
                <div>
                    <label for="ip" class="block text-sm font-medium text-gray-700">Endereço IP*</label>
                    <input type="text" id="ip" wire:model="ip"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                {{-- Nome da Máquina --}}   
                <div>
                    <label for="nome_maquina" class="block text-sm font-medium text-gray-700">Nome da Máquina *</label>
                    <input type="text" id="nome_maquina" wire:model="nome_maquina" 
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                {{-- Nome do Usuário --}}
                <div>
                    <label for="nome_usuario" class="block text-sm font-medium text-gray-700">Nome do Usuário *</label>
                    <input type="text" id="nome_usuario" wire:model="nome_usuario" 
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>


                {{-- Setor --}}
                <div>
                    <label for="setor" class="block text-sm font-medium text-gray-700">Setor*</label>
                    <input type="text" id="setor" wire:model="setor"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                {{-- Departamento --}}
                <div>
                    <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento (DPT)</label>
                    <input type="text" id="departamento" wire:model="departamento"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>
        </div>

        {{-- SEÇÃO 2: HARDWARE E SISTEMA --}}
        <div class="bg-white shadow-xl rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4 border-b pb-2 text-indigo-700">2. Especificações Técnicas</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                {{-- Processador --}}
                <div>
                    <label for="processador" class="block text-sm font-medium text-gray-700">Processador*</label>
                    <select id="processador" wire:model="processador"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-- Selecionar --</option>

                        <optgroup label="Core i3">
                            <option value="i3 2a">Core i3 2ª Geração</option>
                            <option value="i3 3a">Core i3 3ª Geração</option>
                            <option value="i3 4a">Core i3 4ª Geração</option>
                            <option value="i3 5a">Core i3 5ª Geração</option>
                            <option value="i3 6a">Core i3 6ª Geração</option>
                            <option value="i3 7a">Core i3 7ª Geração</option>
                            <option value="i3 8a">Core i3 8ª Geração</option>
                            <option value="i3 9a">Core i3 9ª Geração</option>
                            <option value="i3 10a">Core i3 10ª Geração</option>
                        </optgroup>

                        <optgroup label="Core i5">
                            <option value="i5 2a">Core i5 2ª Geração</option>
                            <option value="i5 3a">Core i5 3ª Geração</option>
                            <option value="i5 4a">Core i5 4ª Geração</option>
                            <option value="i5 5a">Core i5 5ª Geração</option>
                            <option value="i5 6a">Core i5 6ª Geração</option>
                            <option value="i5 7a">Core i5 7ª Geração</option>
                            <option value="i5 8a">Core i5 8ª Geração</option>
                            <option value="i5 9a">Core i5 9ª Geração</option>
                            <option value="i5 10a">Core i5 10ª Geração</option>
                        </optgroup>

                        <optgroup label="Core i7">
                            <option value="i7 2a">Core i7 2ª Geração</option>
                            <option value="i7 3a">Core i7 3ª Geração</option>
                            <option value="i7 4a">Core i7 4ª Geração</option>
                            <option value="i7 5a">Core i7 5ª Geração</option>
                            <option value="i7 6a">Core i7 6ª Geração</option>
                            <option value="i7 7a">Core i7 7ª Geração</option>
                            <option value="i7 8a">Core i7 8ª Geração</option>
                            <option value="i7 9a">Core i7 9ª Geração</option>
                            <option value="i7 10a">Core i7 10ª Geração</option>
                        </optgroup>
                    </select>
                </div>

                {{-- Placa Mãe --}}
                <div>
                    <label for="placa_mae" class="block text-sm font-medium text-gray-700">Placa Mãe</label>
                    <input type="text" id="placa_mae" wire:model="placa_mae"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                {{-- Tamanho Disco --}}
                <div>
                    <label for="tamanho_disco" class="block text-sm font-medium text-gray-700">Tamanho Disco*
                        (SSD/HDD)</label>
                    <select id="tamanho_disco" wire:model="tamanho_disco"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-- Selecionar Tamanho/Tipo --</option>

                        <optgroup label="SSD (Solid State Drive)">
                            <option value="SSD 120 GB">120 GB SSD</option>
                            <option value="SSD 240 GB">240 GB SSD</option>
                            <option value="SSD 480 GB">480 GB SSD</option>
                            <option value="SSD 500 GB">500 GB SSD</option>
                        </optgroup>

                        <optgroup label="HDD (Hard Disk Drive)">

                            <option value="HDD 320 GB">320 GB HDD</option>
                            <option value="HDD 500 GB">500 GB HDD</option>
                            <option value="HDD 1 TB">1 TB HDD</option>

                        </optgroup>
                    </select>
                </div>

                {{-- Tamanho Memória --}}
                <div>
                    <label for="tamanho_memoria" class="block text-sm font-medium text-gray-700">Memória RAM
                        (quantidade)*</label>
                    <select id="tamanho_memoria" wire:model="memoria_ram"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-- Selecionar --</option>

                        <option value="1x4GB">4 GB (1 pente de 4 GB)</option>

                        <option value="1x8GB">8 GB (1 pente de 8 GB)</option>
                        <option value="2x4GB">8 GB (2 pentes de 4 GB)</option>

                        <option value="2x8GB">16 GB (2 pentes de 8 GB)</option>
                    </select>
                </div>

                {{-- Pente RAM --}}
                <div>
                    <label for="pente_ram" class="block text-sm font-medium text-gray-700">Tipo de Memória RAM*</label>
                    <select id="tipo_memoria" wire:model="tipo_memoria"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-- Selecionar Tipo --</option>
                        <option value="DDR3">DDR3</option>
                        <option value="DDR4">DDR4</option>
                    </select>
                </div>

                {{-- Sistema Operacional --}}
                <div>
                    <label for="sistema_operacional" class="block text-sm font-medium text-gray-700">Sistema
                        Operacional*</label>
                    <select id="sistema_operacional" wire:model="sistema_operacional"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-- Selecionar --</option>

                        <option value="Windows 11 Pro 64-bit">Windows 11 Pro 64-bit</option>

                        <option value="Windows 10 Pro 64-bit">Windows 10 Pro 64-bit</option>
                        <option value="Windows 10 Pro 32-bit">Windows 10 Pro 32-bit</option>

                        <optgroup label="Windows 7">
                            <option value="Windows 7 Ultimate 64-bit">Windows 7 Ultimate 64-bit</option>
                            <option value="Windows 7 Ultimate 32-bit">Windows 7 Ultimate 32-bit</option>
                            <option value="Windows 7 Pro 64-bit">Windows 7 Pro 64-bit</option>
                            <option value="Windows 7 Pro 32-bit">Windows 7 7 Pro 32-bit</option>
                            <option value="Windows 7 64-bit">Windows 7 64-bit</option>
                            <option value="Windows 7 32-bit">Windows 7 32-bit</option>
                        </optgroup>

                        <option value="Windows Server 2012R2">Windows Server 2012R2</option>
                        <option value="Linux">Linux</option>
                    </select>
                </div>

                {{-- Licença SO --}}
                <div>
                    <label for="licenca_so" class="block text-sm font-medium text-gray-700">SO possui licença*</label>
                    <select id="licenca_so" wire:model="licenca_so"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-- Selecionar --</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                        <option value="Free">Free</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- SEÇÃO 3: Monitores --}}
        <div class="bg-white shadow-xl rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4 border-b pb-2 text-indigo-700">3. Monitores</h3>

            @foreach($monitores as $index => $monitor)
                <div class="border border-gray-200 p-4 mb-4 rounded-md relative bg-gray-50">
                    <h4 class="text-md font-medium text-gray-700 mb-4">Monitor #{{ (int) $index + 1 }}</h4>

                    {{-- Botão de Remover Monitor (X) --}}
                    @if(count($monitores) > 1)
                        <button type="button" wire:click="removeMonitor({{ $index }})"
                            class="absolute top-2 right-2 text-red-500 hover:text-red-700 transition duration-150 p-1"
                            title="Remover Monitor">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                        {{-- Tombamento Monitor --}}
                        <div>
                            <label for="monitor_tombamento_{{ $index }}"
                                class="block text-sm font-medium text-gray-700">Tombamento</label>
                            <input type="text" id="monitor_tombamento_{{ $index }}"
                                wire:model="monitores.{{ $index }}.tombamento"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        {{-- Marca Monitor --}}
                        <div>
                            <label for="monitor_marca_{{ $index }}"
                                class="block text-sm font-medium text-gray-700">Marca</label>
                            <input type="text" id="monitor_marca_{{ $index }}" wire:model="monitores.{{ $index }}.marca"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        {{-- Tamanho Tela --}}
                        <div>
                            <label for="monitor_tamanho_tela_{{ $index }}"
                                class="block text-sm font-medium text-gray-700">Tamanho da Tela</label>
                            <select id="monitor_tamanho_tela_{{ $index }}" wire:model="monitores.{{ $index }}.tamanho_tela"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">-- Selecionar --</option>
                                <option value="19">19"</option>
                                <option value="20">20"</option>
                                <option value="21">21"</option>
                                <option value="22">22"</option>
                                <option value="23">23"</option>
                                <option value="24">24"</option>
                                <option value="27">27"</option>
                            </select>
                        </div>

                        {{-- Tipo de Conexão --}}
                        <div>
                            <label for="monitor_tipo_conexao_{{ $index }}"
                                class="block text-sm font-medium text-gray-700">Tipo de Conexão</label>
                            <select id="monitor_tipo_conexao_{{ $index }}" wire:model="monitores.{{ $index }}.tipo_conexao"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">-- Selecionar --</option>
                                <option value="VGA">VGA</option>
                                <option value="HDMI">HDMI</option>
                                <option value="DisplayPort">DisplayPort</option>
                                <option value="DVI">DVI</option>
                            </select>
                        </div>

                    </div>
                </div>
            @endforeach

            {{-- BOTÃO PARA ADICIONAR NOVO MONITOR --}}
            <div class="mt-4 flex justify-end">
                <button type="button" wire:click="addMonitor"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-150 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Adicionar Monitor
                </button>
            </div>
        </div>

        {{-- SEÇÃO 4: PERIFÉRICOS E DETALHES --}}
        <div class="bg-white shadow-xl rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4 border-b pb-2 text-indigo-700">4. Periféricos e Acessórios</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                {{-- Teclado --}}
                <div class="md:col-span-2">
                    <label for="teclado" class="block text-sm font-medium text-gray-700">Teclado</label>
                    <select id="teclado"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500"
                        wire:model="teclado">
                        <option value="">-- Selecionar --</option>
                        <option value="logitech">LogiTech</option>
                        <option value="não">Não</option>
                    </select>
                </div>

                {{-- Mouse --}}
                <div class="md:col-span-2">
                    <label for="mouse" class="block text-sm font-medium text-gray-700">Mouse</label>
                    <select id="mouse"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500"
                        wire:model="mouse">
                        <option value="">-- Selecionar --</option>
                        <option value="logitech">LogiTech</option>
                        <option value="não">Não</option>
                    </select>
                </div>

                {{-- Estabilizador --}}
                <div class="md:col-span-2">
                    <label for="estabilizador" class="block text-sm font-medium text-gray-700">Estabilizador</label>
                    <select id="estabilizador"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500"
                        wire:model="estabilizador">
                        <option value="">-- Selecionar --</option>
                        <option value="1kva">1KVA</option>
                        <option value="500va">500VA</option>
                        <option value="nbk">NBK</option>
                        <option value="não">Não Possui</option>

                    </select>
                </div>

                {{-- Carrinho / Chassi --}}
                <div class="md:col-span-2">
                    <label for="carrinho" class="block text-sm font-medium text-gray-700">Carrinho</label>
                    <select id="carrinho"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500"
                        wire:model="carrinho">
                        <option value="">-- Selecionar --</option>
                        <option value="sim">Sim</option>
                        <option value="não">Não</option>
                    </select>
                </div>
            </div>

            {{-- Observações --}}
            <div class="mt-6">
                <label for="observacoes" class="block text-sm font-medium text-gray-700">Observações Gerais</label>
                <textarea id="observacoes" wire:model="observacoes" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
        </div>

        {{-- BOTÕES DE AÇÃO --}}
        <div class="flex justify-end space-x-4 pt-4">
            <a href="{{ route('inventario.index') }}"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-lg shadow transition duration-150">
                Cancelar
            </a>
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-150">
                Salvar Cadastro
            </button>
        </div>

    </form>
</div>