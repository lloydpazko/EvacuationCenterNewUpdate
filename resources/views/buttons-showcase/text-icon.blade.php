<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <p class="py-4 text-gray-600 dark:text-gray-400">Useless Pages to demo sidebar.</p>

    <div class="py-6">
        @php
            $variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'black'];

            $sizes = ['sm', 'base', 'lg'];
        @endphp


        <div class="grid items-center gap-4">
            @foreach ($variants as $variant)
                <div class="grid items-start grid-cols-3 gap-4 justify-items-center">
                    @foreach ($sizes as $size)
                        <x-button
                            :variant="$variant"
                            size="{{ $size }}"
                            class="items-center gap-2"
                        >
                            <x-heroicon-o-home
                                aria-hidden="true"
                                class="{{ $size == 'sm' ? 'w-4 h-4' : ($size == 'base' ? 'w-6 h-6' : 'w-7 h-7' ) }}"
                            />

                            <span>Button</span>
                        </x-button>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
