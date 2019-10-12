# Freek Broke My Auth Routes!
[![Latest Version on Packagist](https://img.shields.io/packagist/v/edgrosvenor/tupleauth.svg?style=flat-square)](https://packagist.org/packages/edgrosvenor/tupleauth)
![StyleCI](https://github.styleci.io/repos/214550199/shield?branch=master)

I am a big fan of [Freek Van der Herten's](https://twitter.com/freekmurze) approach to  [A better way to register routes in Laravel](https://freek.dev/1210-a-better-way-to-register-routes-in-laravel) and 
[Simplifying controllers](https://freek.dev/1324-simplifying-controllers#controllers-are-better-off-without-a-default-namespace).

But if you follow his advice your auth routes will break. This is because they rely on that namespace in the routes
 service provider. 
 
 You could just manually add all the auth routes by hand to your web.php file. Or you can just type
 
 `composer require edgrosvenor/tupleauth`
 
 and delete `Routes::auth()` from your routes/web.php file.
 
 That's it. No scripts to run. Nothing to add to any service provider. Just set it and forget it.

## Installation

You can install the package via composer:

```bash
composer require edgrosvenor/tupleauth
```

## Usage

Follow Freek's instructions in the articles above. Then delete Routes::auth() from routes/web.php.

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
