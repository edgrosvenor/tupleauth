<?php

namespace Tupleauth\Tests;

use Livewire\Livewire;

class RoutesTest extends TestCase
{
    /** @test */
    public function is_login_alive()
    {
        $response = $this->get('/login');

        dump( $response->exception);

        $response->assertSuccessful();

    }


}
