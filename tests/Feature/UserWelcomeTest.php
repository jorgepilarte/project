<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserWelcomeTest extends TestCase
{
    /** @test */

    function it_load_welcome()
    {
        $this->get('/saludo/jorge/larkin')
        ->assertStatus(200)
        ->assertSee('Bienvenido Jorge, tu apodo es larkin');
    }

      /** @test */

    function it_load_welcome_withaout()
    {
        $this->get('/saludo/Jorge')
        ->assertStatus(200)
        ->assertSee('Bienvenido Jorge, no tiene apodo');
    }
}
