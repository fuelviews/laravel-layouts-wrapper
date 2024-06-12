<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if (View::exists('googletagmanager::head') && config('layout-wrapper.gtm_enabled'))
            @include('googletagmanager::head')
        @endif

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (class_exists(\Livewire\Livewire::class) && config('layout-wrapper.livewire_enabled'))
            @livewireStyles
        @endif

    </head>
    <body>
        @if (View::exists('navigation::components.navigation') && config('layout-wrapper.navigation_enabled'))
            <x-navigation::navigation />
        @endif

        {{ $slot }}

        @if (View::exists('forms::livewire.forms-modal') && config('layout-wrapper.forms_modal_enabled'))
            @livewire('forms-modal')
        @endif

        @if (View::exists('googletagmanager::body') && config('layout-wrapper.gtm_enabled'))
            @include('googletagmanager::body')
        @endif

        @if (class_exists(\Livewire\Livewire::class) && config('layout-wrapper.livewire_enabled'))
            @livewireScripts
        @endif
    </body>
</html>
