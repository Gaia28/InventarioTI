<div class="p-6">
    {{-- Notificação simples (usando props do componente) --}}
    @if($statusMessage)
        <div class="mb-4 p-3 rounded {{ $statusType === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
            {{ $statusMessage }}
        </div>
    @endif
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Novo Cadastro de Usuário</h2>

    <form wire:submit.prevent="save" class="space-y-8">

        <div class="bg-white shadow-xl rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4 border-b pb-2 text-indigo-700">1. Dados Pessoais</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome *</label>
                    <input type="text" id="name" wire:model.defer="name"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                    @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input type="email" id="email" wire:model.defer="email"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                    @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>

                {{-- Select cargo --}}
                <div>
                    <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo *</label>
                    <select id="cargo" wire:model.defer="cargo"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Selecione um cargo</option>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuário</option>
                    </select>
                    @error('cargo') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="bg-white shadow-xl rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4 border-b pb-2 text-indigo-700">2. Senha</h3>

            <div class="flex items-center space-x-3">
                <input type="checkbox" id="sendReset" wire:model="sendReset" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                <label for="sendReset" class="text-sm text-gray-700">Enviar link de redefinição de senha (recomendado)</label>
            </div>

            <p class="mt-3 text-sm text-gray-500">
                O sistema criará uma senha temporária (armazenada com segurança). Recomendado enviar o link para que o usuário escolha sua própria senha.
            </p>
        </div>

        <div class="flex justify-end space-x-4 pt-4">
            <a href="{{ route('usuarios.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-lg shadow transition duration-150">
                Cancelar
            </a>

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-150">
                Criar Usuário
            </button>
        </div>
    </form>

    {{-- container para notificações --}}
    <div id="livewire-notifications" class="fixed right-4 top-6 z-50 space-y-2"></div>

    <script>
        // Escuta o evento emitido pelo Livewire
        Livewire.on('notify', function(data) {
            const container = document.getElementById('livewire-notifications');
            if (!container) return;

            const div = document.createElement('div');
            div.className = 'p-3 rounded shadow-md max-w-sm text-sm ' + (data.type === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800');
            div.textContent = data.message;

            container.appendChild(div);
            setTimeout(() => div.remove(), 5000);
        });
    </script>
</div>
