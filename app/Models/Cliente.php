<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'endereco',
        'telefone',
        'cpf',
        'user_id' // Chave estrangeira para relacionar com o usuário
    ];

    // Definir a relação com o modelo User (um Cliente pertence a um User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
