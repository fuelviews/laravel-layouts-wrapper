# Laravel layout wrapper package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fuelviews/laravel-layout-wrapper.svg?style=flat-square)](https://packagist.org/packages/fuelviews/laravel-layout-wrapper)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fuelviews/laravel-layout-wrapper/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fuelviews/laravel-layout-wrapper/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fuelviews/laravel-layout-wrapper/fix-php-code-style-issues.yml?label=code%20style&style=flat-square)](https://github.com/fuelviews/laravel-layout-wrapper/actions?query=workflow%3A%22Fix+PHP+code+style+issues%22)
[![Total Downloads](https://img.shields.io/packagist/dt/fuelviews/laravel-layout-wrapper.svg?style=flat-square)](https://packagist.org/packages/fuelviews/laravel-layout-wrapper)

Laravel layout wrapper package

## Installation

You can install the package via composer:

```bash
composer require fuelviews/laravel-layout-wrapper
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="layout-wrapper-config"
```

This is the contents of the published config file:

```php
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
    'gtm_enabled' => true,

    // Enable or disable Livewire
    'livewire_enabled' => true,

    // Enable or disable Navigation
    'navigation_enabled' => true,

    // Enable or disable Forms Modal
    'forms_modal_enabled' => true,
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="layout-wrapper-views"
```

## Usage

Wrap your blade files using:

```php
<x-layout-wrapper::layouts.app>
    <div class="h-screen">
        <div class="flex w-full h-full bg-gray-300">

        </div>
    </div>
</x-layout-wrapper::layouts.app>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Thejmitchener](https://github.com/thejmitchener)
- [Fuelviews](https://github.com/fuelviews)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
