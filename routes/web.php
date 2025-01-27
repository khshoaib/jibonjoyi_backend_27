<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\StoryController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/', 'signup')->name('signup');
});


// Home page route (this will be the first page loaded)
Route::get('/index', function () {
    return view('index');
})->name('index');

// Individual routes for each page
Route::get('/economy', function () {
    return view('economy');
})->name('economy');

Route::get('/history', function () {
    return view('history');
})->name('history');

// Route::get('/liberation', function () {
//     return view('liberation');
// })->name('liberation');

Route::get('/literature', function () {
    return view('literature');
})->name('literature');

Route::get('/philosophy', function () {
    return view('philosophy');
})->name('philosophy');

Route::get('/religion', function () {
    return view('religion');
})->name('religion');

Route::get('/science', function () {
    return view('science');
})->name('science');

Route::get('/sports', function () {
    return view('sports');
})->name('sports');

Route::get('/travel', function () {
    return view('travel');
})->name('travel');

Route::get('/world', function () {
    return view('world');
})->name('world');

Route::get('/jibonjoyi-details', function () {
    return view('jibonjoyi_details');
})->name('jibonjoyi_details');


Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

// Authentication Routes
Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin'); // Display sign-in form
Route::post('/signin', [AuthController::class, 'handleSignin'])->name('signin.submit'); // Handle form submission

// // shahed

// Story creation routes
Route::get('/stories/create', [StoryController::class, 'create'])->name('stories.create');
Route::post('/stories', [StoryController::class, 'store'])->name('stories.store');
//story search routes
// Route to show the search form
Route::get('/stories/search', [StoryController::class, 'searchForm'])->name('stories.searchForm');

// Route to handle the search logic
Route::get('/stories/results', [StoryController::class, 'searchResults'])->name('stories.searchResults');
// Route to show the edit form
Route::get('/stories/{id}/edit', [StoryController::class, 'edit'])->name('stories.edit');

// Route to handle the update request
Route::put('/stories/{id}', [StoryController::class, 'update'])->name('stories.update');

//delete story 
Route::delete('/stories/{id}', [StoryController::class, 'destroy'])->name('stories.destroy');




// Liberation page (showing both "ইতিহাস" and "ধর্ম" stories)
Route::get('/liberation', [StoryController::class, 'showStories'])->name('liberation');
// Route::get('/jibonjoyi-details/{id}', [StoryController::class, 'showDetails'])->name('jibonjoyi_details');
Route::get('/increment-click-count/{id}', [StoryController::class, 'incrementClickCount'])->name('incrementClickCount');





Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'handleSignup'])->name('signup.store');


Route::get('/admin/signup', [AuthController::class, 'showAdminSignupForm'])->name('admin.signup');
Route::post('/admin/signup', [AuthController::class, 'handleAdminSignup'])->name('admin.signup.store');

// Authentication
Route::prefix('authentication')->group(function () {
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('/forgotpassword', 'forgotPassword')->name('forgotPassword');
        Route::get('/signin', 'signin')->name('signin');
        Route::get('/signup', 'signup')->name('signup');
    });
});

