<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\MechanicAuthController;
use App\Http\Controllers\Auth\LogoutController;

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
Route::redirect('/', '/login')->name('home');
Route::redirect('/home', '/login')->name('home');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// User (Car Owner) Auth
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login'])->name('user.login');
Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserAuthController::class, 'register'])->name('user.register');

// Mechanic Auth
Route::get('/mechanic/login', [MechanicAuthController::class, 'showLoginForm'])->name('mechanic.login.form');
Route::post('/mechanic/login', [MechanicAuthController::class, 'login'])->name('mechanic.login');
Route::get('/mechanic/register', [MechanicAuthController::class, 'showRegisterForm'])->name('mechanic.register.form');
Route::post('/mechanic/register', [MechanicAuthController::class, 'register'])->name('mechanic.register');

// Logout (shared)
Route::match(['get', 'post'], '/logout', [LogoutController::class, 'logout'])->name('logout');

// Dashboards (protected)
// User dashboard features
Route::middleware(['auth:web', 'user.only'])->group(function () {
    Route::get('/user/dashboard', function () { return view('user.dashboard'); })->name('user.dashboard');
    Route::get('/user/vehicles', function () { return view('user.vehicles'); })->name('user.vehicles');
    Route::get('/user/find-mechanics', function () { return view('user.find_mechanics'); })->name('user.find_mechanics');
    Route::get('/user/repair-requests', function () { return view('user.repair_requests'); })->name('user.repair_requests');
    Route::get('/user/subscriptions', function () { return view('user.subscriptions'); })->name('user.subscriptions');
    Route::get('/user/invoices', function () { return view('user.invoices'); })->name('user.invoices');
    Route::get('/user/maintenance-records', function () { return view('user.maintenance_records'); })->name('user.maintenance_records');
    Route::get('/user/profile', function () { return view('user.profile'); })->name('user.profile');
});

// Mechanic dashboard features
Route::middleware(['auth:mechanic', 'mechanic.only'])->group(function () {
    Route::get('/mechanic/dashboard', function () { return view('mechanic.dashboard'); })->name('mechanic.dashboard');
    Route::get('/mechanic/repair-requests', function () { return view('mechanic.repair_requests'); })->name('mechanic.repair_requests');
    Route::get('/mechanic/services', function () { return view('mechanic.services'); })->name('mechanic.services');
    Route::get('/mechanic/subscriptions', function () { return view('mechanic.subscriptions'); })->name('mechanic.subscriptions');
    Route::get('/mechanic/invoices', function () { return view('mechanic.invoices'); })->name('mechanic.invoices');
    Route::get('/mechanic/customers', function () { return view('mechanic.customers'); })->name('mechanic.customers');
    Route::get('/mechanic/reviews', function () { return view('mechanic.reviews'); })->name('mechanic.reviews');
    Route::get('/mechanic/profile', function () { return view('mechanic.profile'); })->name('mechanic.profile');
});