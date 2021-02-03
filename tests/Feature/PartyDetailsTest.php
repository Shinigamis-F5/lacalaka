<?php

namespace Tests\Feature;

use App\Http\Livewire\PartyFollowers;
use App\Models\Party;
use App\Models\Style;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PartyDetailsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_see_party_details_page()
    {
        $style = Style::create(['style' => "Rock", 'style_description' => "blablanla"]);
        $party = Party::factory()->create([]);

        $response = $this->get(route('party.details', $party->id));
        $response->assertStatus(200)
            ->assertViewIs('party-details')
            ->assertViewHas('party', $party)
            ->assertSee($party->title);
    }

    public function test_register_user_can_follow_party()
    {
        $party = Party::factory()->create();
        $this->actingAs(User::factory()->create());
        Livewire::test(PartyFollowers::class)
            ->call('follow');
    }
}
