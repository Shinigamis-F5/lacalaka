<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;
    public $address, $city, $phone, $img;



    public function render()
    {
        $user = Auth::user();
        $this->user = Auth::user();
        $parties = $user->partiesUser()->get();
        return view('livewire.user-profile', ['parties' => $parties, 'user' => $user]);
    }

    public function edit(User $user)
    {
        $this->address = $user->address;
        $this->city = $user->city;
        $this->phone = $user->phone;
    }

    public function upload(User $user)
    {
        $user->update([
            'address' => $this->address,
            'city' => $this->city,
            'phone' => $this->phone,
        ]);

        $user->saveOrFail();
    }

    public function storeImg(User $user)
    {
        $this->validate([
            'img' => ['required', 'image', 'max:1024'],
        ]);
        $user->update([
            'img' => $this->img->getClientOriginalName(),
        ]);

        DB::transaction(function () {
            $this->img->storeAs('public/venue-image', $this->img->getClientOriginalName());
        });
    }

    public function deleteImg(User $user)
    {
        $this->img = $user->img;

        $user->update([
            $user->img => null,
        ]);

        DB::transaction(function () {
            DB::table('users')->update(['img' => null]);
            Storage::delete([$this->img]);
        });
    }
}
