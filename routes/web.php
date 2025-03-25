<?php

use App\Livewire\Auth\Login;
use App\Livewire\Cliente\Cadastro;
use App\Livewire\Cliente\Dashboard;
use Illuminate\Support\Facades\Route;

// rota para acessar a página de cadastro do cliente
Route::get('/cliente', Cadastro::class)->name('cliente.create');

//página de login
Route::get('/login',  Login::class)->name('login');

//página inicial do cliente
Route::get('/cliente/pagina/inicial', Dashboard::class)->middleware(['auth', 'role:cliente'])->name('cliente.dashboard');

//página inicial do funcionario
Route::get('/funcionario/pagina/inicial', Dashboard::class)->middleware(['auth', 'role:funcionario'])->name('funcionario.dashboard');

//página inicial do adm
Route::get('/administrador/pagina/inicial', Dashboard::class)->middleware(['auth', 'role:administrador'])->name('administrador.dashboard');
