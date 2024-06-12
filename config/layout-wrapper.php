<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Layout Wrapper Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file contains settings for the layout wrapper of your
    | application. You can enable or disable various features like Google Tag
    | Manager, Livewire, Navigation, and Forms Modal.
    |
    */

    // Enable or disable Google Tag Manager
    'gtm_enabled' => env('GTM_ENABLED', false),

    // Enable or disable Livewire
    'livewire_enabled' => env('LIVEWIRE_ENABLED', false),

    // Enable or disable Navigation
    'navigation_enabled' => env('NAVIGATION_ENABLED', true),

    // Enable or disable Forms Modal
    'forms_modal_enabled' => env('FORMS_MODAL_ENABLED', true),
];
