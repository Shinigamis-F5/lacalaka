<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class VisitorTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_visitor_can_access_to_venue_or_user_public_profile()
    {
        $user = User::factory()->create();
        $id = $user->id;

        $response = $this->get('/venue/' . $id);

        $response->assertStatus(200);
    }

    public function test_visitor_see_venue_information_in_view()
    {
        $venue = User::factory()->create([
            'role' => 'venue',
        ]);

        $id = $venue->id;

        $response = $this->get('/venue/' . $id);

        $response->assertSee($venue->organization);
    }
}
