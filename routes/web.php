<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list',[EmployeeController::class, 'index'])->name('employee_list');
Route::get('/create',[EmployeeController::class, 'create_form'])->name('employee_create');
Route::post('/create',[EmployeeController::class, 'create'])->name('employee_submit');
Route::get('/employee/{id}',[EmployeeController::class, 'get_employee'])->name('employee_edit');
Route::post('/update/{id}',[EmployeeController::class, 'update'])->name('employee_update');
Route::post('/delete',[EmployeeController::class, 'delete'])->name('employee_delete');
