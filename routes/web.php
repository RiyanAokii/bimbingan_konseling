<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\SessionController;
use App\http\controllers\DashboardController;
use App\Http\Middleware\isLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/login', [SessionController::class, 'index']);

route::post('login/proses', [SessionController::class, 'login']);

route::get('/logout', [SessionController::class, 'logout']);

route::get('/dashboard', [DashboardController::class, 'index'])->middleware('isLogin');

