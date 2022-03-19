# Laravel Packages that allows Attribute updates to be delayed

[![Latest Version on Packagist](https://img.shields.io/packagist/v/exula/laravel-delayed-attributes.svg?style=flat-square)](https://packagist.org/packages/exula/laravel-delayed-attributes)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/exula/laravel-delayed-attributes/run-tests?label=tests)](https://github.com/exula/laravel-delayed-attributes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/exula/laravel-delayed-attributes/Check%20&%20fix%20styling?label=code%20style)](https://github.com/exula/laravel-delayed-attributes/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/exula/laravel-delayed-attributes.svg?style=flat-square)](https://packagist.org/packages/exula/laravel-delayed-attributes)

The goal of this package is to allow attributes on Eloquent Models to have a delayed update to not overload a database.
Most attributes this makes absolutely NO SENSE, and should be avoided as your database will not be up-to-date with reality. 

A possible use case for this package is for updating view counts, hit counts, or something like 'last accessed'

Imagine you have an application that tracks every time a certain item is accessed by your users, and you want to update
a field on the model when that item is accessed with a date of the last access.

```php

function updateLastAccessed($model)
{
    $model->last_accessed = Carbon::now();
    $model->save();
}

```


## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-delayed-attributes.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-delayed-attributes)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require exula/laravel-delayed-attributes
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-delayed-attributes-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-delayed-attributes-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-delayed-attributes-views"
```

## Usage

```php
$laravelDelayedAttributes = new Exula\LaravelDelayedAttributes();
echo $laravelDelayedAttributes->echoPhrase('Hello, Exula!');
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

- [Brad Coudriet](https://github.com/exula)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
