<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Party;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PartyFollowers extends Component
{
    public $followers;
    public $party;
    public $showFollowersModal = false;
    public $numberOfFollowers = 8;
    public $isFollowing = false;
    public $buttonTitle = "Follow";

    public function mount($id)
    {
        $this->party = Party::find($id);
        $this->checkUser();
        $this->followers = $this->party->users()->latest()->take($this->numberOfFollowers)->get();
    }

    public function checkUser () {
        
        if (Auth::user() && $this->party->users->contains(Auth::user())) {
            $this->isFollowing = true;
            $this->buttonTitle = "Unfollow";
            return;
        }
        return;
    }
    
    public function render()
    {
        return view('livewire.party-followers', ['followers' => $this->followers]);
    }

    public function follow()
    {
        
        if (!Auth::user()) {
            return redirect()->to('login');
        }

        $user = Auth::user();
        $user->followParty($this->party);
        $this->isFollowing = true;
        $this->buttonTitle = "Unfollow";
        $this->mount($this->party->id);
    }

    public function unFollow()
    {
        $user = Auth::user();
        $user->unfollowParty($this->party);
        $this->isFollowing = false;
        $this->buttonTitle = "follow";
    }

    public function showModal()
    {
        $this->showFollowersModal = !$this->showFollowersModal;
    }

    public function showMoreFollowers()
    {
        $this->numberOfFollowers = $this->numberOfFollowers + 3;
        $this->mount($this->party->id);
    }
}
