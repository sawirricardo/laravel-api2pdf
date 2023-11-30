# [Api2pdf](https://api2pdf.com) wrapper

![Laravel Api2Pdf](https://banners.beyondco.de/laravel-api2pdf.png?theme=light&packageManager=composer+require&packageName=sawirricardo%2Flaravel-api2pdf&pattern=bankNote&style=style_1&description=Use+Api2Pdf+in+your+Laravel+apps&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-api2pdf.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-api2pdf)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-api2pdf/run-tests?label=tests)](https://github.com/sawirricardo/laravel-api2pdf/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-api2pdf/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/laravel-api2pdf/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-api2pdf.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-api2pdf)


## Installation

You can install the package via composer:

```bash
composer require blackpig/laravel-api2pdf
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

## Credits

-   Forked from [sawirricardo](https://github.com/sawirricardo/laravel-api2pdf)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
