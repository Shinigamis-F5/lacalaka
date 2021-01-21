<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VenueProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_as_venue_view_profile_exist()
    {
        $venue = User::factory()->create();
        
        $response = $this->actingAs($venue)
            ->get('/venue-profile');

        $response->assertStatus(200);
    }

    public function test_venue_can_see_his_name_in_profile_page()
    {
        $venue = User::factory()->create();
        $name = $venue->name;

        $response = $this->actingAs($venue)
            ->get('/venue-profile')
            ->assertSee($name);
    }
}
