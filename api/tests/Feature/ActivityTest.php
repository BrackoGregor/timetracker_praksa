<?php

namespace Tests\Feature;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ActivityTest extends TestCase
{

    //RULES
    //#1 you are not allowed to write any production code, until you've first written a test that fails
    //#2 you are not allowed to write more of a test, then it's sufficient to fail. As soon as test fails, you've must stop writing it
    //#3 you are not allowed to write any production code, then it's sufficient to pass current failing test
    //Programmers write tests for their own code!
    //RULES


    /**
     * Activity Index example.
     *
     * @return void
     */
    public function test_activity_index()
    {
        $response = $this->get('/api/activities');

        $response->assertStatus(200);
    }

    /**
     * Activity Show example.
     *
     * @return void
     */
    public function test_activity_show()
    {
        $response = $this->json('GET', '/api/activities/12');

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
     * Activity Store example.
     *
     * @return void
     */
    public function test_activity_store()
    {
        $formData = [
            'title' => 'test_store',
            'start_time' => '2021-04-06 18:16:38',
            'end_time' => '2021-04-06 18:16:38',
            'comment' => 'testing store method',
            'id_assignments' => '3'
        ];

        $response = $this->postJson('/api/activities', $formData);

        $response
            ->assertStatus(201)
            ->assertJson($formData);
    }

    /**
     * Activity Put example.
     *
     * @return void
     */
    public function test_activity_put()
    {
        $formData = [
            'title' => 'test_update',
            'start_time' => '2021-04-06 18:16:38',
            'end_time' => '2021-04-06 18:16:38',
            'comment' => 'testing update method',
            'id_assignments' => '3'
        ];

        $response = $this->putJson('/api/activities/7', $formData);

        $response
            ->assertStatus(200);
    }

    /**
     * Activity Delete example.
     *
     * @return void
     */
    public function test_activity_delete()
    {
        $response = $this->deleteJson('/api/activities/7');

        $response
            ->assertStatus(204);
    }
}
