# Package that parses all of your routes, and assigns them the data in and data out definitions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/przemyslaw-przylucki/laravel-route-definitions.svg?style=flat-square)](https://packagist.org/packages/przemyslaw-przylucki/laravel-route-definitions)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/przemyslaw-przylucki/laravel-route-definitions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/przemyslaw-przylucki/laravel-route-definitions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/przemyslaw-przylucki/laravel-route-definitions/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/przemyslaw-przylucki/laravel-route-definitions/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/przemyslaw-przylucki/laravel-route-definitions.svg?style=flat-square)](https://packagist.org/packages/przemyslaw-przylucki/laravel-route-definitions)

## Installation

You can install the package via composer:

```bash
composer require przemyslaw-przylucki/laravel-route-definitions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-route-definitions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-route-definitions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-route-definitions-views"
```

## Usage

```php
$laravelRouteDefinitions = new SaasLaravel\LaravelRouteDefinitions();
echo $laravelRouteDefinitions->echoPhrase('Hello, SaasLaravel!');
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

- [Przemysław Przyłucki](https://github.com/przemyslaw-przylucki)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
