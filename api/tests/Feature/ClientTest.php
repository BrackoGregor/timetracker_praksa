<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Client;

class ClientTest extends TestCase
{
    public function test_client_can_create()
    {
        $createdClient = Client::factory()->make();
        $response = $this->post('/api/v1/clients', $createdClient->toArray());
        $response->assertStatus(201);
        $this->assertDatabaseHas('clients', $createdClient->toArray());
    }

    public function test_client_can_delete()
    {
        $createdClient = Client::factory()->create();
        $response = $this->delete('/api/v1/clients/'. $createdClient->id);
        $response->assertStatus(204);
        $this->assertSoftDeleted('clients', $createdClient->toArray());
    }

    public function test_client_can_update()
    {
        $createdClientInDb = Client::factory()->create();
        $createdClient = Client::factory()->make();
        $response = $this->patch('/api/v1/clients/'. $createdClientInDb->id, $createdClient->toArray());
        $response->assertStatus(200);
        $this->assertDatabaseHas('clients', $createdClient->toArray());
    }

    public function test_client_can_get()
    {
        $createdClientInDb = Client::factory()->create();
        $response = $this->get('/api/v1/clients/'. $createdClientInDb->id);
        $response->assertStatus(200);
        $this->assertDatabaseHas('clients', $createdClientInDb->toArray());
    }

    public function test_client_can_get_all()
    {
        $response = $this->get('/api/v1/clients');
        $response->assertStatus(200);
    }

    public function test_client_can_not_show_client_with_invalid_id()
    {
        $response = $this->get('/api/v1/clients/'. 0);
        $response->assertStatus(404);
    }

    public function test_client_can_not_update_client_with_invalid_id()
    {
        $createdClient = Client::factory()->make();
        $response = $this->patch('/api/v1/clients/'. 0, $createdClient->toArray());
        $response->assertStatus(404);
    }

    public function test_client_can_not_delete_client_with_invalid_id()
    {
        $response = $this->delete('/api/v1/clients/'. 0);
        $response->assertStatus(404);
    }
}
