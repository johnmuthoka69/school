<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaygroupController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Pp1Controller;
use App\Http\Controllers\Pp2Controller;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LogoutController;

 Route::get('/', function () {
        return view('welcome');
    });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('Playgroup', PlaygroupController::class);

Route::resource('Grade', GradeController::class);
Route::resource('Pp1', Pp1Controller::class);
// Route::resource('Pp2', Pp2Controller::class);
Route::resource('Pp2', Pp2Controller::class)->except(['edit']);
Route::get('Pp2/{id}/edit', [Pp2Controller::class, 'edit'])->name('Pp2.edit');
Route::delete('/Playgroup/{id}', 'PlaygroupController@destroy')->name('playgroup.destroy');



});
Route::post('/logout', [Fortify::class, 'logout'])->name('logout');


Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
   
    
});

Fortify::requestPasswordResetLinkView(function () {
    return view('auth.forgot-password');
});

Fortify::resetPasswordView(function ($request) {
    return view('auth.reset-password', ['request' => $request]);
});
Route::get('/search', [SearchController::class, 'search'])->name('search');
// routes/web.php

Route::get('/show-associated/{model}/{id}', 'SearchController@showAssociated')->name('show_associated');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/Pp2', [Pp2Controller::class, 'index'])->name('pp2.index');
Route::get('/Pp2', 'Pp2Controller@index')->name('pp2.index');

