<?php

namespace Tests\Feature\Venue;

use App\Http\Livewire\PartiesListVenue\VenueDash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

class VenueTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_venue_can_upload_his_profile()
    {
        $venue = User::factory()->create(['role' => 'venue']);

        $this->actingAs($venue)
            ->put( 'venue.update', [
                'organization' => 'My Organization',
            ] );

        $this->assertDatabaseHas('users', ['organization' => 'My Organization']);
    }
    
    public function test_venue_can_upload_img_of_new_party()
    {
        Storage::fake('party-fotos');

        $file = UploadedFile::fake()->image('party.png');

        Livewire::test(VenueDash::class)
                ->set('photo', $file)
                ->call('store', 'store-party.png');

        Storage::disk('party-fotos');
    }
}
