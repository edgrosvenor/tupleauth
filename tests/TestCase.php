<?php

namespace Tupleauth\Tests;

use Illuminate\Support\Facades\Artisan;
use Laravel\Ui\AuthCommand;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Tupleauth\TupleauthServiceProvider;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            TupleauthServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $command = new AuthCommand();
        Artisan::registerCommand($command);
        Artisan::call('ui:auth bootstrap --views --force');

        $app['config']->set('app.key', 'base64:r0w0xC+mYYqjbZhHZ3uk1oH63VadA3RKrMW52OlIDzI=');
    }
}
