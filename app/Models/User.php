<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_CLIENTE = 'cliente';
    const ROLE_FUNCIONARIO = 'funcionario';
    const ROLE_ADMINISTRADOR = 'administrador';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function isCliente(){
        return $this->role == self::ROLE_CLIENTE;
    }
    public function isFuncionario(){
        return $this->role == self::ROLE_FUNCIONARIO;
    }
    public function isAdministrador(){
        return $this->role == self::ROLE_ADMINISTRADOR;
    }


    public function Cliente()
    {
        return $this->hasOne(Cliente::class);
    }
}
