<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase
{
    /** @test */

    function it_load_Home()
    {
        $this->get('/home')
        ->assertStatus(200)
        ->assertSee('Home');
    }

       /** @test */

    function it_load_User()
	{

	$this->get('/usuarios')
	->assertStatus(200)
	->assertSee('Usuarios');
	}

         /** @test */

    function it_load_list_empty()
    {

    $this->get('/usuarios?empty')
    ->assertStatus(200)
    ->assertSee('No hay usuarios registrado.');
    }

	   /** @test */

    function it_load_user_id()
    {
    	$this->get('/usuarios/7')
    	->assertStatus(200)
    	->assertSee('Mostrando destalle del usuario: 7');
    }

    /** @test */

    function it_load_new_user()
    {
    	$this->get('/usuarios/nuevo')
    	->assertStatus(200)
    	->assertSee('Crear nuevo usuario');
    }


}
