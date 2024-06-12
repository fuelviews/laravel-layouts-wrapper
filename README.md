# This is my package laravel-layout-wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fuelviews/laravel-layout-wrapper.svg?style=flat-square)](https://packagist.org/packages/fuelviews/laravel-layout-wrapper)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fuelviews/laravel-layout-wrapper/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fuelviews/laravel-layout-wrapper/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fuelviews/laravel-layout-wrapper/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fuelviews/laravel-layout-wrapper/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fuelviews/laravel-layout-wrapper.svg?style=flat-square)](https://packagist.org/packages/fuelviews/laravel-layout-wrapper)

Laravel layout wrapper

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
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="layout-wrapper-views"
```

## Usage

```php
<x-layout-wrapper::layouts.app>

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
