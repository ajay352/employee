<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;





// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/add', [EmployeeController::class, 'add'])->name('add');
Route::get('/view', [EmployeeController::class, 'view'])->name('view');
Route::post('/list', [EmployeeController::class, 'list'])->name('list');
Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::get('/display/{id}', [EmployeeController::class, 'display'])->name('display');
Route::patch('/update_sec/{id}', [EmployeeController::class, 'update_sec'])->name('update_sec');
Route::get('/export', [EmployeeController::class,'export'])->name('export');



