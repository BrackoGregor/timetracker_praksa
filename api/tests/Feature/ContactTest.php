<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class ContactTest extends TestCase
{
    public function test_contact_can_create()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdContact = Contact::factory()->create(
            ['id_client' => $createdClient->id]
        );

        $response = $this->post('/api/v1/contacts', $createdContact->toArray());
        $response->assertStatus(201);
        $this->assertDatabaseHas('contacts', $createdContact->toArray());
    }

    public function test_contact_can_delete()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdContact = Contact::factory()->create(
            ['id_client' => $createdClient->id]
        );

        $response = $this->delete('/api/v1/contacts/'. $createdContact->id);
        $response->assertStatus(204);
        $this->assertSoftDeleted('contacts', $createdContact->toArray());
    }

    public function test_contact_can_update()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdContactDb = Contact::factory()->create(
            ['id_client' => $createdClient->id]
        );

        $createdClientDb = Client::factory()->create();
        $createdContact = Contact::factory()->make(
            ['id_client' => $createdClientDb->id]
        );

        $response = $this->patch('/api/v1/contacts/'. $createdContactDb->id, $createdContact->toArray());
        $response->assertStatus(200);
        $this->assertDatabaseHas('contacts', $createdContact->toArray());
    }

    public function test_contact_can_get()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdContact = Contact::factory()->create(
            ['id_client' => $createdClient->id]
        );

        $response = $this->get('/api/v1/contacts/'. $createdContact->id);
        $response->assertStatus(200);
        $this->assertDatabaseHas('contacts', $createdContact->toArray());
    }

    public function test_contact_can_get_all()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->get('/api/v1/contacts?page=1&per_page=3');
        $response->assertStatus(200);
        $this->assertNotEmpty($response->json('data'));
    }

    public function test_contact_can_not_show_contact_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->get('/api/v1/contacts/'. 0);
        $response->assertStatus(404);
    }

    public function test_contact_can_not_update_contact_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdContact = Contact::factory()->create(
            ['id_client' => $createdClient->id]
        );

        $response = $this->patch('/api/v1/contacts/'. 0, $createdContact->toArray());
        $response->assertStatus(404);
    }

    public function test_contact_can_not_delete_contact_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->delete('/api/v1/contacts/'. 0);
        $response->assertStatus(404);
    }
}
