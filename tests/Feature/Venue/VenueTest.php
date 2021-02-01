<?php

namespace Tests\Feature\Venue;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VenueTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_venue_can_upload_img_of_new_party()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
