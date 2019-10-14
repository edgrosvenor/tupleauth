<?php

namespace Tupleauth\Tests;

class RoutesTest extends TestCase
{
    /** @test */
    public function is_login_alive()
    {
        $response = $this->get('login');
        $response->assertSuccessful();
    }

    /** @test */
    public function can_i_post_to_login()
    {
        $response = $this->post('login');
        $response->assertStatus(302);
    }
}
