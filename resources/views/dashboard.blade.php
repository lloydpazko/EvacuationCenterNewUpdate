<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{--<a href="{{ url('/') }}">
                {{ __('home') }}
                </a>--}}

                <a href="{{ route('Locatorapps.index') }}" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" rel="nofollow" style="padding: 10px 20px;">Maps</a>
            </h2>
            <div class="container mt-2">
        </div>
    </x-slot>
</x-app-layout>
