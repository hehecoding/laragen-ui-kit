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

## Components
### 1. Button
The Laragen Button Component is a customizable button component for Laravel Blade that uses Tailwind CSS classes. It supports various props to customize the appearance and behavior of the button.
#### Usage
To use the Laragen Button Component, you can include it in your Blade views like this:
```php
<x-laragen::button color="error" size="xs" rounded="lg">
    {{ $slot }}
</x-laragen::button>
```
The `{{ $slot }}` will be replaced with the text or HTML content that you want to display in the button.

#### Props
The following props are available for the Laragen Button Component:
* `color` (string, optional): the color of the button. Available options are primary (default), success, and error.
* `variant` (string, optional): the style of the button. Available options are default (default), tonal, outlined, plain, and text.
* `block` (boolean, optional): whether the button should take up the full width of its container.
* `rounded` (string, optional): the roundness of the button. Available options are sm, normal (default), lg, 0 and pill.
* `disabled` (boolean, optional): whether the button should be disabled.
* `icon` (string, optional): the name of the Font Awesome icon to display in the button. The button `{{ $slot }}` is replaced by the icon.
* `iconBefore` (string, optional): the name of the Font Awesome icon to display before the button text.
* `iconAfter` (string, optional): the name of the Font Awesome icon to display after the button text.
* `loading` (boolean, optional): whether the button should display a loading spinner.
* `size` (string, optional): the size of the button. Available options are xs, sm, normal (default), lg, and xl.
* `href` (string, optional): if provided, the button will be rendered as an anchor tag with this URL.

#### Examples
Here are some examples of how to use the Tailwind Button Component with different props:
```php
<!-- A primary button with a custom text and a before icon -->
<x-laragen::button color="success" iconBefore="fas fa-plus">Add Item</x-laragen::button>

<!-- A disabled button with a loading spinner -->
<x-laragen::button disabled loading></x-laragen::button>

<!-- A link button with an icon -->
<x-laragen::button href="/" icon="fas fa-home"></x-laragen::button>

<!-- A text-only button -->
<x-laragen::button variant="text">Cancel</x-laragen::button>

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
