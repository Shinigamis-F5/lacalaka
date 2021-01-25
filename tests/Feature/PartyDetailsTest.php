<?php

namespace Tests\Feature;

use App\Models\Party;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PartyDetailsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $party = Party::factory()->create();
        
    
        $response = $this->get(route('party.details', $party->id));
        $response->dump();
        $response->assertStatus(200);
    }
}
