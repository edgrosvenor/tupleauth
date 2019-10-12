<?php

namespace Tupleauth\Tests;

class RoutesTest extends TestCase
{
    /** @test */
    public function is_login_alive()
    {
        $response = $this->get('/login');

        $response->dump();

        $response->assertSuccessful();
    }
}
