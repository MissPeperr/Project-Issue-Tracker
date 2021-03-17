<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects/{project_id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

Route::post('/issues', [App\Http\Controllers\IssueController::class, 'store'])->name('issues.store');
Route::get('/issues/create', [App\Http\Controllers\IssueController::class, 'create'])->name('issues.create');