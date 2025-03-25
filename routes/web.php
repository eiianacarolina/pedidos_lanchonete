<?php

use App\Livewire\Cliente\Cadastro;
use Illuminate\Support\Facades\Route;

Route::get('/cliente', Cadastro::class)->name('cliente.create');
