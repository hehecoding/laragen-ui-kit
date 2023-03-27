@props([
    'title' => 'Adaugă',
    'widthClass' => 'w-full sm:max-w-lg lg:max-w-screen-lg',
    'hideActions' => false
    ])

<div x-data="{ open: false }"
     @keydown.window.escape="open = false"
     x-ref="dialog"
     x-cloak
     class="relative z-50" aria-labelledby="{{ $title }}" role="dialog" aria-modal="true"
     xmlns:x-laragen="http://www.w3.org/1999/html">

    @isset($activator)
        {{ $activator }}
    @else
        <x-laragen::button type="button" @click="open = true">
            open
        </x-laragen::button>
    @endif


    <div x-show="open"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-300 bg-opacity-75 transition-opacity"
    >
    </div>

    <div x-show="open" class="fixed inset-2 z-10 overflow-y-auto">
        <div class="flex min-h-full justify-center p-4 text-center items-center sm:p-0">
            <div
                x-show="open"
                @click.away="open = false"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="{{ $widthClass }} relative transform overflow-hidden rounded bg-white text-left shadow transition-all"
            >

                <div class="flex justify-between items-center gap-2 px-5 py-3 border-b border-gray-300">
                    <h3 class="font-bold text-blue-400" id="modal-title">{{ $title }}</h3>
                    <x-laragen::button @click="open = false" variant="outlined" size="sm" color="gray" rounded="pill" icon="fal fa-close">Anulează
                    </x-laragen::button>
                </div>

                <div class="px-5 py-3">
                    {{ $slot }}
                </div>

                @if(!$hideActions)
                    <div class="border-t border-gray-300 p-5 py-3 flex gap-2 justify-between items-center">
                    @isset($footer)
                        {{ $footer }}
                    @else
                            <x-laragen::button @click="open = false" variant="text" size="sm" color="gray">Anulează
                            </x-laragen::button>
                            <x-laragen::button size="sm">Salvează</x-laragen::button>
                    @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
