<?php

namespace App\Modules\User\Tests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterUserTest extends TestCase
{
    use WithFaker;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->setUpFaker();

        $response = $this
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->json('POST', 'api/registration/user', [
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'password' => 'secret'
            ]);

        $response
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'user_id',
                    'email',
                    'name',
                    'content' => [
                        'token_type',
                        'expires_in',
                        'access_token',
                        'refresh_token',
                    ],
                ]
            ]);
    }
}
