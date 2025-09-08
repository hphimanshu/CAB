<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\FirmController;
use App\Http\Controllers\Auth\CustomerController;
use App\Http\Controllers\Auth\DocUploadController;

// Default route - show login form
// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Login routes
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Show login form on "/"
// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Redirect root to login
Route::get('/', function () {
    return redirect()->route('login');
});

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/import-users-csv', [RegisterController::class, 'importCsv'])->name('import.users.csv');

// Authenticated dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Authenticated customer route
Route::get('/customer', function () {
    return view('customer');
})->middleware('auth')->name('customer');

// Authenticated profile route
Route::get('/profile', [
    AuthController::class, 'showProfile'
])->middleware('auth')->name('profile');

// Authenticated profile route
Route::get('/firmprofile/{user_id}', [FirmController::class, 'show'])
    ->middleware('auth')
    ->name('firmprofile');

// Authenticated documents route
Route::get('/userdocuments', [CustomerController::class, 'showCustomerDocuments'])
    ->middleware('auth')
    ->name('userdocuments');
    
Route::get('/userdocuments/ajax/{user_id}', [DocUploadController::class, 'fetchDocuments'])->name('user.documents.ajax');





// Authenticated settings route
Route::get('/settings', function () {
    return view('settings');
})->middleware('auth')->name('settings');

// Authenticated calendar route
Route::get('/calander', function () {
    return view('calander');
})->middleware('auth')->name('calander');

// Authenticated calendar route
Route::get('/todo', function () {
    return view('todo');
})->middleware('auth')->name('todo');

// Authenticated docupload route
Route::get('/docupload', function () {
    return view('docupload');
})->middleware('auth')->name('docupload');

Route::middleware('auth')->group(function () {
    Route::get('/docupload/{user:user_id}', [DocUploadController::class, 'edit'])->name('docupload');
});

Route::post('/docupload/{user}/upload', [DocUploadController::class, 'store'])->name('docupload.store');
