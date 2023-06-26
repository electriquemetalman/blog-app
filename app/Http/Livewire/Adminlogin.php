<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Adminlogin extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {

        if (auth()->user()) {
            redirect('/create_post');
        }
    }

    public function render()
    {
        return view('livewire.adminlogin');
    }

    public function login()
    {
        /*$passs = Hash::make('bronde123');
        dd($passs);*/
        $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/create_post');
        } else {
            return $this->addError('email', trans('Nom d\'utilisateur ou mot de passe incorrect.'));
        }
    }
}
