<?php

namespace Tests\Feature;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class AssignmentTest extends TestCase
{
    /**
     * Assignment Index example.
     *
     * @return void
     */
    public function test_assignment_index()
    {
        $response = $this->get('/api/assignments');

        $response->assertStatus(200);
    }

    /**
     * Assignment Show example.
     *
     * @return void
     */
    public function test_assignment_show()
    {
        $response = $this->json('GET', '/api/assignments/12');

        $response
            ->assertJson(function (AssertableJson $json) {
                return $json->where('id', 12)
                    ->where('title', 'popravki')
                    //->missing('password')
                    ->etc();
            }
            );
    }

    /**
     * Assignment Store example.
     *
     * @return void
     */
    public function test_assignment_store()
    {
        $formData = [
            'title' => 'test_store',
            'start_time' => '2021-04-06 18:16:38',
            'end_time' => '2021-04-06 18:16:38',
            'comment' => 'testing store method',
            'id_assignments' => '3'
        ];

        $response = $this->postJson('/api/assignments', $formData);

        $response
            ->assertStatus(201)
            ->assertJson($formData);
    }

    /**
     * Assignment Put example.
     *
     * @return void
     */
    public function test_assignment_put()
    {
        $formData = [
            'title' => 'test_update',
            'start_time' => '2021-04-06 18:16:38',
            'end_time' => '2021-04-06 18:16:38',
            'comment' => 'testing update method',
            'id_assignments' => '3'
        ];

        $response = $this->putJson('/api/assignments/7', $formData);

        $response
            ->assertStatus(200);
    }

    /**
     * Assignment Delete example.
     *
     * @return void
     */
    public function test_assignment_delete()
    {
        $response = $this->deleteJson('/api/assignments/7');

        $response
            ->assertStatus(204);
    }
}
