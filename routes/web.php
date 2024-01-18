<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UtilisateursController;
use App\Models\Sous_Categories;
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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::group(["as"=>'admin.'],function(){
    Route::get('/',[UtilisateursController::class,'login'])->name('login');
    Route::post('/auth',[UtilisateursController::class,'authentifier'])->name('authentifier');
    Route::get('/logout', [UtilisateursController::class,'logout'])->name('logout');

});
// route des categories
Route::group([ "prefix"=>'categories',"as"=>'categories.'],function(){
    Route::get('/',[CategoriesController::class,'index'])->name('index');
    Route::get('/create',[CategoriesController::class,'create'])->name('create');
    Route::post('/store',[CategoriesController::class,'store'])->name('store');
    Route::get('/edit/{id}',[CategoriesController::class,'edit'])->name('edit');
    Route::post('/update',[CategoriesController::class,'update'])->name('update');
    Route::get('/destroy/{id}',[CategoriesController::class,'destroy'])->name('destroy');
});
// route des sous_categories

Route::group([ "prefix"=>'sous_categories',"as"=>'sous_categories.'],function(){
    Route::get('/',[Sous_Categories::class,'index'])->name('index');
    Route::get('/create',[Sous_Categories::class,'create'])->name('create');
    Route::post('/store',[Sous_Categories::class,'store'])->name('store');
    Route::get('/edit/{id}',[Sous_Categories::class,'edit'])->name('edit');
    Route::post('/update',[Sous_Categories::class,'update'])->name('update');
    Route::get('/destroy/{id}',[Sous_Categories::class,'destroy'])->name('destroy');
});

