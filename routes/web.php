<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

Route::group([
    'as' => "Locatorapps.",
    // 'middleware' => "auth"
], function () {

    Route::get('/Locatorapps', ['uses' => 'MaprecordsController@index', 'as' => 'index']);

    Route::get('/Locatorapps/create', ['uses' => 'MaprecordsController@create', 'as' => 'create']);

    Route::get('/Locatorapps/edit/{id}', ['uses' => 'MaprecordsController@edit', 'as' => 'edit']);

    Route::post('/Locatorapps/store', ['uses' => 'MaprecordsController@store', 'as' => 'store']);

    Route::put('/Locatorapps/update/{id}', ['uses' => 'MaprecordsController@update', 'as' => 'update']);

    Route::delete('/Locatorapps/delete/{id}', ['uses' => 'MaprecordsController@destroy', 'as' => 'destroy']);

});

require __DIR__ . '/auth.php';

