<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class UserApiControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     *
     */
    public function test_get_users_endpoint_should_return_all_users()
    {
        User::factory(3)->create();

        $response = $this->get('/api/users');

        $response->assertStatus(200);

        $response->assertJson(function(AssertableJson $json) {
            $json->count(3);

            $json->whereAllType(['0.name' => 'string', '0.email' => 'string']);

            $json->missing('password');
        });
    }
}
