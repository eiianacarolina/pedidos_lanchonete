<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Cadastro extends Component
{
    public $nome;
    public $password;
    public $email;
    public $endereco;
    public $telefone;
    public $cpf;

    public function store (){

        $user = User::create([
            'name'=> $this->nome,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'cliente'
        ]);

        Cliente::create([
            'endereco'=> $this->endereco,
            'telefone'=> $this->telefone,
            'cpf'=> $this->cpf,
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.cliente.cadastro');
    }
}
