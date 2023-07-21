<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\FrontEndController;
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

Route::get('/dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('sub-categories', SubCategoryController::class);
    Route::post('subcategory',[SubCategoryController::class, 'subcaegory'])->name('subcategory');
});

//User Routes
Route::get('/', [FrontEndController::class, 'home'])->name('/');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/export-markete', [FrontEndController::class, 'export'])->name('export');
Route::get('/contactus', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/enquiry', [FrontEndController::class, 'enquiry'])->name('enquiry');
Route::get('/product/{id}', [FrontEndController::class, 'product'])->name('product');
require __DIR__ . '/auth.php';
