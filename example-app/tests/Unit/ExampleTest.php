<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function register() 
    {
        $data = [
            'name' => 'john',
            'email' => 'john@email.com',
            'password' => 'secret'
        ];
    
        User::register($data);

        $this->assertDatabaseHas('users', [
            'name' => 'john',
            'email' => 'john@email.com'
        ]);

    }

    /** @test */
    public function mainPage()
    {
        $response = $this->get('/');

        // $this->assertEquals(200, $response->status());
        $response->assertOK();
    }

    /** @test */
    public function login()
    {
        $response = $this->post('/login', [
            'email' => 'test@example.com',
        ]);

        dd($response);
    }
    
}
