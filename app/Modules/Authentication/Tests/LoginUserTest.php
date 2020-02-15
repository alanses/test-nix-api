<?php

namespace App\Modules\Authentication\Tests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->json('POST', 'api/login', [
                'email' => 'admin@gmail.com',
                'password' => 'admin@gmail.com',
            ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'user_id',
                    'email',
                    'name',
                    'content' => [
                        'token_type',
                        'expires_in',
                        'access_token',
                        'refresh_token'
                    ]
                ]
            ]);

    }
}
