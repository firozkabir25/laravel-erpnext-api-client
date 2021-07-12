# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/firoz/laravel-erpnext-api-client.svg?style=flat-square)](https://packagist.org/packages/firoz/laravel-erpnext-api-client)
[![Total Downloads](https://img.shields.io/packagist/dt/firoz/laravel-erpnext-api-client.svg?style=flat-square)](https://packagist.org/packages/firoz/laravel-erpnext-api-client)
![GitHub Actions](https://github.com/firozkabir25/laravel-erpnext-api-client/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

# Laravel 6 ERPNext API Client

A simple Laravel 6 client for the [ERPNext](https://erpnext.com/) system.

## Installation

### Step 1: Install Through Composer

```bash
composer require firoz/laravel-erpnext-api-client
```

### Step 2: Add the Service Provider
Add the service provider in `app/config/app.php`
```php
'provider' => [
    ...
    Firoz\LaravelErpnextApiClient\LaravelErpnextApiClientServiceProvider::class,
    ...
];

### Step 3: Add the Facade
Add the alias in `app/config/app.php`
```php
'aliases' => [
    ...
    'LaravelErpnextApiClient' => Firoz\LaravelErpnextApiClient\LaravelErpnextApiClientFacade::class,
    ...
];
```
### Step 4: Publish the configuration file
```php
php artisan vendor:publish --provider="Firoz\LaravelErpnextApiClient\LaravelErpnextApiClientServiceProvider"
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email firozkabirprodhan5@gmail.com instead of using the issue tracker.

## Credits

-   [Firoz kabir](https://github.com/firozkabir25)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
