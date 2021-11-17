<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/serach', 'searchController@search')->name('home');

//Auth::routes();
//

//All routes on products//////////////
Route::get('/ShowAddProduct', [App\Http\Controllers\ProjectsController::class, 'ShowAddProduct'])->name('ShowAddProduct');
Route::post('/addProject', [App\Http\Controllers\ProjectsController::class, 'addProject'])->name('addProject');
Route::get('/allProjects', [App\Http\Controllers\ProjectsController::class, 'allProjects'])->name('allProjects');
Route::get('/DeleteProject/{id}', [App\Http\Controllers\ProjectsController::class, 'delete']);
Route::get('/EditProject/{id}', [App\Http\Controllers\ProjectsController::class, 'editProject']);
Route::post('/updateProject', [App\Http\Controllers\ProjectsController::class, 'updateProject'])->name('updateProject');

//All routes on dashboard/////////////////////
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'showDashboard'])->name('dashboard');

Route::get('/', 'App\Http\Controllers\portfolioController@portfolio');
