<?php

namespace Tests\Feature;

use App\Models\Assignment;
use App\Models\Client;
use App\Models\Status;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use Laravel\Passport\Passport;
use Tests\TestCase;

class AssignmentTest extends TestCase
{
    public function test_assignment_can_create()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdStatus = Status::factory()->create();
        $createdAssignment = Assignment::factory()->create(
            ['id_clients' => $createdClient->id, 'id_statuses' => $createdStatus->id]
        );

        $response = $this->post('/api/v1/assignments', $createdAssignment->toArray());
        $response->assertStatus(201);
        $this->assertDatabaseHas('assignments', $createdAssignment->toArray());
    }

    public function test_assignment_can_delete()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdStatus = Status::factory()->create();
        $createdAssignment = Assignment::factory()->create(
            ['id_clients' => $createdClient->id, 'id_statuses' => $createdStatus->id]
        );
        $response = $this->delete('/api/v1/assignments/'. $createdAssignment->id);
        $response->assertStatus(204);
        $this->assertSoftDeleted('assignments', $createdAssignment->toArray());
    }

    public function test_assignment_can_update()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdStatus = Status::factory()->create();
        $createdAssignmentInDb = Assignment::factory()->create(
            ['id_clients' => $createdClient->id, 'id_statuses' => $createdStatus->id]
        );

        $createdClientInDb = Client::factory()->create();
        $createdStatusInDb = Status::factory()->create();
        $createdAssignment = Assignment::factory()->make(
            ['id_clients' => $createdClientInDb->id, 'id_statuses' => $createdStatusInDb->id]
        );

        $response = $this->patch('/api/v1/assignments/'. $createdAssignmentInDb->id, $createdAssignment->toArray());
        $response->assertStatus(200);
        $this->assertDatabaseHas('assignments', $createdAssignment->toArray());
    }

    public function test_assignment_can_get()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdStatus = Status::factory()->create();
        $createdAssignment = Assignment::factory()->create(
            ['id_clients' => $createdClient->id, 'id_statuses' => $createdStatus->id]
        );

        $response = $this->get('/api/v1/assignments/'. $createdAssignment->id);
        $response->assertStatus(200);
        $this->assertDatabaseHas('assignments', $createdAssignment->toArray());
    }

    public function test_assignment_can_get_all()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->get('/api/v1/assignments');
        $response->assertStatus(200);
    }

    public function test_assignment_can_not_show_assignment_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->get('/api/v1/assignments/'. 0);
        $response->assertStatus(404);
    }

    public function test_assignment_can_not_update_assignment_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdClient = Client::factory()->create();
        $createdStatus = Status::factory()->create();
        $createdAssignment = Assignment::factory()->create(
            ['id_clients' => $createdClient->id, 'id_statuses' => $createdStatus->id]
        );

        $response = $this->patch('/api/v1/assignments/'. 0, $createdAssignment->toArray());
        $response->assertStatus(404);
    }

    public function test_assignments_can_not_delete_assignment_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->delete('/api/v1/assignments/'. 0);
        $response->assertStatus(404);
    }
}
