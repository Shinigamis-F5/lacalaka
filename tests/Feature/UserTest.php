<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\Party;
use App\Models\Style;
use App\Models\User;
use Illuminate\Support\Str;

class UserTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_rating_seccion()
    {
    }

    public function test_user_can_see_their_profile()
    {
        $style = Style::create(['id' => 1, 'style' => 'Rock', 'style_description' => 'agagsgagg']);
        $style = Style::create(['id' => 2, 'style' => 'Punk', 'style_description' => 'agagsgagg']);
        $user = User::factory()->create([
            'name' => 'vanessa',
            'email' => 'vanessa@cat.cat',
            'role' => 'private_user',
            'address' => 'nowhere junction street',
            'openingTimes' => 'sjdjskdjskjd',
            'img' => 'https://i.pravatar.cc/300',
            'organization' => 'lollypoppe',
            'city' => 'barcelona',
            'description' => 'djshdkjash djkashkdjashd',
            'phone' => '1112 2222 122',
            'rate' => '0',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $response = $this->actingAs($user)->get(route('user.show', $user));
        $response->assertStatus(200)
            ->assertViewIs('dashboard-user.profile')
            ->assertViewHas('user', $user)
            ->assertSee($user->name);
    }
}
