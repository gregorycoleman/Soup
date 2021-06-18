# Soup ORM laravel package



## Installation

You can install the package via composer:

```bash
composer require gregorycoleman/souporm
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Gregorycoleman\Souporm\SoupormServiceProvider" --tag="souporm-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Gregorycoleman\Souporm\SoupormServiceProvider" --tag="souporm-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$souporm = new Gregorycoleman\Souporm();
echo $souporm->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Gregory Coleman](https://github.com/gregorycoleman)
- [All Contributors](../../contributors)

## License

AFFERO GENERAL PUBLIC LICENSE. Please see [License File](LICENSE.md) for more information.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gregorycoleman/souporm.svg?style=flat-square)](https://packagist.org/packages/gregorycoleman/souporm)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/gregorycoleman/souporm/run-tests?label=tests)](https://github.com/gregorycoleman/souporm/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/gregorycoleman/souporm/Check%20&%20fix%20styling?label=code%20style)](https://github.com/gregorycoleman/souporm/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gregorycoleman/souporm.svg?style=flat-square)](https://packagist.org/packages/gregorycoleman/souporm)

