<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.logout');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
