<?php

namespace parzival42codes\laravelResourcesOptimisation;

use Illuminate\Support\Facades\Route;
use parzival42codes\laravelResourcesOptimisation\Http\Controllers\UserController;

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

Route::get(
    '/user/admin',
    [
        UserController::class,
        'show',
    ]
);
