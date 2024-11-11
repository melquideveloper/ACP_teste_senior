<?php

use App\Http\Controllers\AcpController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//https://github.com/nikozrh/test-devs-uefs

//Rota de interface para página login, para fins testes da api
Route::get('/', [AcpController::class, 'index'])->name('home');

//Rota de interface para validar as credencias do login
Route::post('/login', [UserController::class, 'login'])->name('login');

//Rota de interface dashboard protegida pela Auth JWT, para somente usuário logados acessem  
Route::group(['middleware' => ['apiJwt']], function () {
    Route::get('/insomnia', [AcpController::class, 'acp'])->name('painelacp');
});

