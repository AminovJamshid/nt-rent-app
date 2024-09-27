<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdController::class, 'index'])->name('home');

Route::resource('ads', AdController::class);

Route::post('/ads/{id}/bookmark', [\App\Http\Controllers\UserController::class, 'toggleBookmark']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/**
 * TODO Dashboard:
 *  1. Add link to home page [4]
 *  2. Add icons to menu items [1]
 *  3. Make fields sortable: [5]
 *      - price, rooms, gender, status, branch
 *  4. Hide address and description from AdResource index [2]
 *  5. Display uploaded image via relationship (show only related images count) [100]
 *  6. Display ads attached to branches [100]
 *  7. Display ads attached to users [100]
 *  8. Translate + Create button on index pages []
 *  9. Add Bookmarked ads resource and all related stuff
 *
 * TODO home page:
 *  1. Add icons
 *  2. Show corresponding data on index and detail pages (branch, gender, rooms)
 *  3. Implement bookmarking feature (use many to many relationship)
 */




/**
 * TODO:
 *  1. Make one code base
 *   - Fork from the latest version (all branches)
 *   - Clone the repo
 *   - Combine all existing features: code, db
 *   - Pull request
 */








