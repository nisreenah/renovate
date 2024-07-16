<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\SitController;

use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('site.index');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::name('site.')->group(function () {

    Route::get('/', [SitController::class, 'home'])->name('home');
    Route::get('/about-us', [SitController::class, 'about'])->name('about-us');
    Route::get('/services', [SitController::class, 'services'])->name('services');
    Route::get('/service-details/{slug}', [SitController::class, 'serviceDetails'])->name('service-details');
    Route::get('/projects', [SitController::class, 'projects'])->name('projects');
    Route::get('/project-details/{slug}', [SitController::class, 'projectDetails'])->name('project-details');
    Route::get('/teams', [SitController::class, 'teams'])->name('teams');
    Route::get('/contact-us', [SitController::class, 'contact'])->name('contact');
    Route::post('/send-message', [SitController::class, 'sendMessage'])->name('send-message');
    Route::post('/leave-comment', [SitController::class, 'leaveComment'])->name('leave-comment');

});


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('admin.')->prefix('admin')->group(function () {

        // Route Name Prefixes => admin.categories
        Route::resource('categories', CategoryController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('gallery', GalleryController::class)->only(['store', 'destroy']);
        Route::resource('teams', TeamController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
        Route::resource('aboutUs', AboutController::class);//->only(['index', 'edit', 'update']);
        Route::resource('comments', CommentController::class);//->only(['index', 'show', 'update', 'destroy']);
    });
});

require __DIR__ . '/auth.php';
