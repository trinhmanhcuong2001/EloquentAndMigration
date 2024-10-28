<?php

use App\Models\Task;
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

Route::get('/', function () {
    $tasks = Task::where('title', 'LIKE', '%Quét nhà%')->orWhere('completed', '=', 'Chưa hoàn thành')->get();
    return view('result_filter', compact('tasks'));
});
