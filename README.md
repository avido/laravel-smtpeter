# Smtpeter API client for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![Total Downloads][ico-downloads]][link-downloads]

This package incorporates the [Smtpeter API client](https://github.com/avido/smtpeter-php-api) for your Laravel project

## Installation

```bash
composer require avido/laravel-smtpeter
```

## Configuration
Add your Smtpeter Api key to the `.env` file
```
SMTPETER_API_KEY=YOUR-API-KEY
```

\
You can optionally publish the config file with:
```php 
php artisan vendor:publish --provider="Avido\LaravelSmtpeter\ServiceProvider" --tag="config"`
```


## Usage

```php
$templates = Smtpeter::templates()->list();
ddd($templates);
```

* [Full documentation for the Smtpeter API client](https://github.com/avido/smtpeter-php-api)

## Testing

``` bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/avido/laravel-smtpeter.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-tests]: https://img.shields.io/github/workflow/status/avido/laravel-smtpeter/tests/main?label=tests&style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/avido/laravel-smtpeter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/avido/laravel-smtpeter
[link-tests]: https://github.com/avido/laravel-smtpeter/actions?query=workflow%3Atests
[link-downloads]: https://packagist.org/packages/avido/laravel-smtpeter
