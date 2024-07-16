<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if (class_exists(RalphJSmit\Laravel\SEO\SEOManager::class))
        {!! seo() !!}
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if (class_exists(\Livewire\Livewire::class) && config('layouts-wrapper.livewire_enabled'))
        @livewireStyles
    @endif

    @if(class_exists(\Spatie\GoogleFonts\GoogleFonts::class))
        @googlefonts
    @endif

    @if (View::exists('googletagmanager::head') && config('layouts-wrapper.gtm_enabled'))
        @include('googletagmanager::head')
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

