<?php

namespace Tests\Feature;

use App\Models\Assignment;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use Laravel\Passport\Passport;
use Tests\TestCase;
use App\Models\Activity;

class ActivityTest extends TestCase
{

    //RULES
    //#1 you are not allowed to write any production code, until you've first written a test that fails
    //#2 you are not allowed to write more of a test, then it's sufficient to fail. As soon as test fails, you've must stop writing it
    //#3 you are not allowed to write any production code than it's sufficient to pass current failing test
    //Programmers write tests for their own code!
    //RULES


    public function test_activity_can_create()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdAssignment = Assignment::factory()->create();
        $createdActivity = Activity::factory()->create(
            ['id_assignments' => $createdAssignment->id]
        );

        $response = $this->post('/api/v1/activities', $createdActivity->toArray());
        $response->assertStatus(201);
        $this->assertDatabaseHas('activities', $createdActivity->toArray());
    }

    public function test_activity_can_delete()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdAssignment = Assignment::factory()->create();
        $createdActivity = Activity::factory()->create(
            ['id_assignments' => $createdAssignment->id]
        );

        $response = $this->delete('/api/v1/activities/'. $createdActivity->id);
        $response->assertStatus(204);
        $this->assertSoftDeleted('activities', $createdActivity->toArray());
    }

    public function test_activity_can_update()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdAssignment = Assignment::factory()->create();
        $createdActivityDb = Activity::factory()->create(
            ['id_assignments' => $createdAssignment->id]
        );

        $createdAssignmentDb = Assignment::factory()->create();
        $createdActivity = Activity::factory()->make(
            ['id_assignments' => $createdAssignmentDb->id]
        );

        $response = $this->patch('/api/v1/activities/'. $createdActivityDb->id, $createdActivity->toArray());
        $response->assertStatus(200);
        $this->assertDatabaseHas('activities', $createdActivity->toArray());
    }

    public function test_activity_can_get()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdAssignment = Assignment::factory()->create();
        $createdActivity = Activity::factory()->create(
            ['id_assignments' => $createdAssignment->id]
        );

        $response = $this->get('/api/v1/activities/'. $createdActivity->id);
        $response->assertStatus(200);
        $this->assertDatabaseHas('activities', $createdActivity->toArray());
    }

    public function test_activity_can_get_all()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->get('/api/v1/activities');
        $response->assertStatus(200);
    }

    public function test_activity_can_not_show_activity_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->get('/api/v1/activities/'. 0);
        $response->assertStatus(404);
    }

    public function test_activity_can_not_update_activity_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $createdAssignment = Assignment::factory()->create();
        $createdActivity = Activity::factory()->create(
            ['id_assignments' => $createdAssignment->id]
        );

        $response = $this->patch('/api/v1/activities/'. 0, $createdActivity->toArray());
        $response->assertStatus(404);
    }

    public function test_activity_can_not_delete_activity_with_invalid_id()
    {
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->delete('/api/v1/activities/'. 0);
        $response->assertStatus(404);
    }
}
