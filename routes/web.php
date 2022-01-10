<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'show']);

Route::get('/contacts', [ContactController::class, 'store'])
            ->middleware('auth');

Route::post('/contacts/create', [ContactController::class, 'create'])
            ->middleware('auth')
            ->name('contacts.create');

Route::post('/contacts/{id}', [ContactController::class, 'delete'])
            ->middleware('auth')
            ->name('contacts.delete');            

require __DIR__.'/auth.php';
