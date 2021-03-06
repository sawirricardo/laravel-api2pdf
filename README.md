# [Api2pdf](https://api2pdf.com) wrapper

![Laravel Api2Pdf](https://banners.beyondco.de/laravel-api2pdf.png?theme=light&packageManager=composer+require&packageName=sawirricardo%2Flaravel-api2pdf&pattern=bankNote&style=style_1&description=Use+Api2Pdf+in+your+Laravel+apps&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-api2pdf.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-api2pdf)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-api2pdf/run-tests?label=tests)](https://github.com/sawirricardo/laravel-api2pdf/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-api2pdf/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/laravel-api2pdf/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-api2pdf.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-api2pdf)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-api2pdf.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-api2pdf)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-api2pdf
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-api2pdf-config"
```

This is the contents of the published config file:

```php
return [
    'api_key'=> env('API2PDF_API_KEY'),
];
```

## Usage

```php
// @see https://github.com/Api2Pdf/api2pdf.php
$result = api2pdf()->chromeHtmlToPdf('<p>Hello, World</p>');
echo $result->getFile();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
