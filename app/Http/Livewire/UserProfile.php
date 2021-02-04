<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class UserProfile extends Component
{
    public $user;
    
    public function mount(User $user) {
        $this->user = $user;

    }
    public function render()
    {
        $parties = $this->user->partiesUser()->get();
        return view('livewire.user-profile', ['parties' => $parties]);
    }
}
