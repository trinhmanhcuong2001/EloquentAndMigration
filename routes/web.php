<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

Route::group(['prefix' => 'project', 'as' => 'project.'], function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/create', [ProjectController::class, 'store'])->name('store');
    Route::get('/update/{project}', [ProjectController::class, 'edit'])->name('edit');
    Route::put('/update/{project}', [ProjectController::class, 'update'])->name('update');
    Route::delete('/delete/{project}', [ProjectController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'task', 'as' => 'task.'], function () {
    Route::get("/", [TaskController::class, "index"])->name("index");
    Route::get("/create", [TaskController::class, "create"])->name("create");
    Route::post("/create", [TaskController::class, "store"])->name("store");
    Route::get("/update/{task}", [TaskController::class, 'edit'])->name("edit");
    Route::put("/update/{task}", [TaskController::class, 'update'])->name("update");
    Route::delete('/delete/{task}', [TaskController::class, 'destroy'])->name("destroy");
});
