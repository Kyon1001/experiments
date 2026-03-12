<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloPageTest extends TestCase
{
    public function test_hello_page_is_displayed(): void
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);
        $response->assertSee('Hello Laravel');
    }
}
