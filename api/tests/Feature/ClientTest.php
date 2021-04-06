<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * Client Index example.
     *
     * @return void
     */
    public function test_client_index()
    {
        $response = $this->get('/api/clients');

        $response->assertStatus(200);
    }

    /**
     * User Show example.
     *
     * @return void
     */
    public function test_client_show()
    {
        $response = $this->json('GET', '/api/clients/1');

        $response
            ->assertJson(function (AssertableJson $json) {
                return $json->where('id', 1)
                    ->where('username', 'test_create')
                    //->missing('password')
                    ->etc();
            }
            );
    }

    /**
     * Client Store example.
     *
     * @return void
     */
    public function test_client_store()
    {
        $formData = [
            'name' => 'test_create',
            'address' => 'test_create',
            'postcode' => 'test_create',
            'city' => 'test_create',
            'country' => 'test_create'
        ];

        $response = $this->postJson('/api/clients', $formData);

        $response
            ->assertStatus(201)
            ->assertJson($formData);
    }

    /**
     * Client Put example.
     *
     * @return void
     */
    public function test_client_put()
    {
        $formData = [
            'name' => 'test_update',
            'address' => 'test_update',
            'postcode' => 'test_update',
            'city' => 'test_update',
            'country' => 'test_update'
        ];

        $response = $this->putJson('/api/clients/1', $formData);

        $response
            ->assertStatus(200);
    }

    /**
     * Client Delete example.
     *
     * @return void
     */
    public function test_client_delete()
    {
        $response = $this->deleteJson('/api/clients/2');

        $response
            ->assertStatus(204);
    }
}
