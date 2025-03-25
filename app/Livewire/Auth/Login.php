<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;


    // fazendo as validações do login
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    protected $messages = [
        'email.required' => 'email obrigatório',
        'email.email' => 'formato de email inválido',
        'password.required' => 'senha obrigatória',
        'password.min' => 'senha deve conter no minimo 6 caracteres'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            session()->regenerate();
            if (Auth::user()->role === 'cliente') {
                return redirect()->route('cliente.dashboard');
            }
            if (Auth::user()->role === 'funcionario') {
                return redirect()->route('funcionario.dashboard');
            }
            if (Auth::user()->role === 'administrador') {
                return redirect()->route('administrador.dashboard');
            }
        }
        session()->flash('error', 'Email ou senha incorreto');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
