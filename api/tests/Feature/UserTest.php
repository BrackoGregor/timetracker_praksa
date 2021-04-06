<?php

namespace Tests\Feature;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * User Index example.
     *
     * @return void
     */
    public function test_user_index()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }

    /**
     * User Show example.
     *
     * @return void
     */
    public function test_user_show()
    {
        $response = $this->json('GET', '/api/users/1');

        $response
            ->assertJson(function (AssertableJson $json) {
                return $json->where('id', 1)
                    ->where('username', 'admin')
                    //->missing('password')
                    ->etc();
            }
            );
    }

    /**
     * User Store example.
     *
     * @return void
     */
    public function test_user_store()
    {
        $formData = [
            'firstname' => 'test_create',
            'lastname' => 'test_create',
            'username' => 'test_create',
            'email' => 'test_create@solve-x.net',
            'password' => 'test_create',
            'id_users_roles' => '2'
        ];

        $response = $this->postJson('/api/users', $formData);

        $response
            ->assertStatus(201)
            ->assertJson($formData);
    }

    /**
     * User Put example.
     *
     * @return void
     */
    public function test_user_put()
    {
        $formData = [
            'firstname' => 'test_update',
            'lastname' => 'test_update',
            'username' => 'test_update',
            'email' => 'test_update@solve-x.net',
            'password' => 'test_update',
            'id_users_roles' => '1'
        ];

        $response = $this->putJson('/api/users/1', $formData);

        $response
            ->assertStatus(200);
    }

    /**
     * User Delete example.
     *
     * @return void
     */
    public function test_user_delete()
    {
        $response = $this->deleteJson('/api/users/2');

        $response
            ->assertStatus(204);
    }
}
