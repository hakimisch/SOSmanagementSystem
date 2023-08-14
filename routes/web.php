<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MiscellaneousController;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartsController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboard;

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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Display the login form
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate'); // Handle form submission

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboardadmin', [AdminDashboard::class, 'index'])->name('dashboardadmin'); // Dashboard route
});


require __DIR__.'/web/template.php';
require __DIR__.'/web/main.php';