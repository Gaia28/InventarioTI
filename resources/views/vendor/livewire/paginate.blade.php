<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center gap-2">
            
            {{-- Botão Anterior --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-50 border border-gray-200 rounded-lg cursor-not-allowed">
                    Anterior
                </span>
            @else
                <button wire:click="previousPage" wire:loading.attr="disabled" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                    Anterior
                </button>
            @endif

            {{-- Números das Páginas --}}
            <div class="hidden md:flex gap-2">
                @foreach ($elements as $element)
                    {{-- "..." Separador --}}
                    @if (is_string($element))
                        <span class="px-3 py-1 text-sm text-gray-500 border border-transparent">{{ $element }}</span>
                    @endif

                    {{-- Links numéricos --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                {{-- ESTADO ATIVO (Página Atual) - Destaquei um pouco mais --}}
                                <span class="px-3 py-1 text-sm text-blue-600 bg-blue-50 border border-blue-300 rounded-lg font-bold">
                                    {{ $page }}
                                </span>
                            @else
                                {{-- SEU ESTILO AQUI --}}
                                <button wire:click="gotoPage({{ $page }})" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                                    {{ $page }}
                                </button>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            {{-- Botão Próxima --}}
            @if ($paginator->hasMorePages())
                <button wire:click="nextPage" wire:loading.attr="disabled" class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                    Próxima
                </button>
            @else
                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-50 border border-gray-200 rounded-lg cursor-not-allowed">
                    Próxima
                </span>
            @endif
        </nav>
    @endif
</div>