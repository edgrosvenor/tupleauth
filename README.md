# Auth Routes, Tuple Style
[![Latest Version on Packagist](https://img.shields.io/packagist/v/edgrosvenor/tupleauth.svg?style=flat-square)](https://packagist.org/packages/edgrosvenor/tupleauth)

Inspried by 
[A better way to register routes in Laravel](https://freek.dev/1210-a-better-way-to-register-routes-in-laravel) and 
[Simplifying controllers](https://freek.dev/1324-simplifying-controllers#controllers-are-better-off-without-a-default-namespace)
this package strives to quickly solve the one little annoyance that removing the namespace from the route service
provider introduces. The auth routes don't work anymore. You could go in and add them by hand to your web.php file but
that isn't fun. So instead, you can just require this package and delete the Routes::auth() from your route file.

## Installation

You can install the package via composer:

```bash
composer require edgrosvenor/tupleauth
```

## Usage



### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ed.grosvenor@exactsports.com instead of using the issue tracker.

## Credits

- [Ed Grosvenor](https://github.com/exactsports)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
