<div x-data="{ open: false, name: '{{ auth()->user()->name }}' }"
     x-on:profile-updated.window="name = $event.detail.name"
     class="relative">

  <button class="md:hidden p-2 m-2 rounded-md focus:outline-none focus:ring"
          aria-label="Abrir menu"
          @click="open = true">
    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
  </button>

  <div x-show="open"
       x-transition.opacity
       x-cloak
       @click="open = false"
       class="fixed inset-0 bg-black/50 z-30 md:hidden">
  </div>

  <aside
    :class="open ? 'translate-x-0' : '-translate-x-full'"
    x-transition
    @keydown.escape.window="open = false"
    class="fixed top-0 left-0 z-40 h-screen w-64 p-2 bg-gray-100 border-r border-gray-300
           transform md:translate-x-0 md:fixed md:inset-y-0 md:left-0 md:flex md:flex-col
           overflow-y-auto"
    aria-label="Barra lateral principal">

     <div class="flex items-center justify-between h-16 px-2 mb-2">
      <div class="text-xl font-semibold uppercase">Inventario T.I</div>
      <button class="md:hidden p-2 rounded-md focus:outline-none focus:ring" @click="open = false" aria-label="Fechar menu">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

            <a href="{{ route('usuarios.index') }}"
               class="flex items-center p-2 my-2 transition duration-300 rounded-lg hover:bg-gray-300
        {{ request()->routeIs('usuarios.index') ? 'bg-gray-200' : '' }}"wire:navigate>
                Usuários
            </a>

    </nav>

    <div class="pt-4 pb-1 border-t border-gray-200 px-2">
      <div class="mb-3">
        <div class="font-medium text-base"
     x-text="name.split(' ').length > 1 
        ? name.split(' ')[0] + ' ' + name.split(' ').pop()
        : name">
</div>
        <div class="font-medium text-sm text-gray-500 truncate">
          {{ auth()->user()->email }}
        </div>
      </div>

      <div class="space-y-1">
        <x-responsive-nav-link :href="route('profile')" wire:navigate class="block w-full px-3 py-2 text-left">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        <button wire:click="logout" class="block w-full text-left">
          <x-responsive-nav-link class="block w-full px-3 py-2">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </button>
      </div>
    </div>
  </aside>
</div>
