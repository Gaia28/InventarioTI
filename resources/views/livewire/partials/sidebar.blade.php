<div class="flex flex-col w-64 h-screen p-2 bg-gray-100 border-r border-gray-300">
    <div class="flex items-center justify-center h-16">
        <span class="text-xl font-semibold uppercase">
            Inventario T.I
        </span>
    </div>

    <nav class="flex-grow p-4">
        <a href="{{ route('dashboard') }}" class="flex items-center p-2 my-2 transition duration-300 rounded-lg hover:bg-gray-300
        {{ request()->routeIs('dashboard') ? 'bg-gray-200' : '' }}" wire:navigate>Dashboard</a>

        <a href="{{ route('inventario.index') }}"
           class="flex items-center p-2 my-2 transition duration-300 rounded-lg hover:bg-gray-300
        {{ request()->routeIs('inventario.index') ? 'bg-gray-200' : '' }}" wire:navigate>
            Computadores
        </a>

        @if (Auth::user()->role === $roleAdmin)
            <a href="{{ route('usuarios.index') }}"
               class="flex items-center p-2 my-2 transition duration-300 rounded-lg hover:bg-gray-300
        {{ request()->routeIs('usuarios.index') ? 'bg-gray-200' : '' }}"wire:navigate>
                Usuários
            </a>

        @endif
    </nav>
    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
        <div class="px-4">
            <div class="font-medium text-base"
                x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                x-on:profile-updated.window="name = $event.detail.name"></div>
            <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
        </div>

        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile')" wire:navigate>
                {{ __('Profile') }}
            </x-responsive-nav-link>

            <!-- Authentication -->
            <button wire:click="logout" class="w-full text-start">
                <x-responsive-nav-link>
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </button>
        </div>
    </div>
</div>