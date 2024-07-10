<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if (View::exists('googletagmanager::head') && config('layouts-wrapper.gtm_enabled'))
            @include('googletagmanager::head')
        @endif

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (class_exists(\Livewire\Livewire::class) && config('layouts-wrapper.livewire_enabled'))
            @livewireStyles
        @endif

        @if(class_exists(\Spatie\GoogleFonts\GoogleFonts::class))
            @googlefonts
        @endif
    </head>
    <body>
        @if (View::exists('navigation::components.navigation') && config('layouts-wrapper.navigation_enabled'))
            <x-navigation::navigation />
        @endif

        {{ $slot }}

        @if (View::exists('forms::livewire.forms-modal') && config('layouts-wrapper.forms_modal_enabled'))
            @livewire('forms-modal')
        @endif

        @if (View::exists('googletagmanager::body') && config('layouts-wrapper.gtm_enabled'))
            @include('googletagmanager::body')
        @endif

        @if (class_exists(\Livewire\Livewire::class) && config('layouts-wrapper.livewire_enabled'))
            @livewireScripts
        @endif
    </body>
</html>

