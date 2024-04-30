<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileLogoutOtherBrowserSessionsForm extends Component
{
    public function render()
    {
        // Add any necessary logic for rendering the component
        return view('livewire.profile.profile-logout-other-browser-sessions-form');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
