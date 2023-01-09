# Blade component UI kit for LaraGEN applications
[![Latest Version on Packagist](https://img.shields.io/packagist/v/hehecoding/laragen-ui-kit.svg?style=flat-square)](https://packagist.org/packages/hehecoding/laragen-ui-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hehecoding/laragen-ui-kit/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/hehecoding/laragen-ui-kit/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hehecoding/laragen-ui-kit/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/hehecoding/laragen-ui-kit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/hehecoding/laragen-ui-kit.svg?style=flat-square)](https://packagist.org/packages/hehecoding/laragen-ui-kit)
## Installation

You can install the package via composer:

```bash
composer require hehecoding/laragen-ui-kit
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laragen-ui-kit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laragen-ui-kit-views"
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

- [HeHeCoding](https://github.com/hehecoding)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
