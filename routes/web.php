<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\AdminController;


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
    return view('backend.layout.home');
});


Route::get('create/product',[ProductController:: class,'CreateProduct'])->name('create.product');
Route::get('product/list',[ProductController:: class,'productlist'])->name('product.list');

// employee 
Route::get('create/profile',[EmployeeController:: class,'CreateProfile'])->name('create.profile');
Route::post('employee/store',[EmployeeController:: class,'employeeStore'])->name('employee.store');
Route::get('employee/list',[EmployeeController:: class,'employeelist'])->name('employee.list');
// employee update 
Route::post('employee/update/{user_id}', [EmployeeController::class, 'employee_update'])->name('employee.update');
Route::get('/employee/update/{user_id}',[EmployeeController::class,'employee_edit'])->name('employee.edit');
Route::get('employee/delete/{employee_id}', [EmployeeController::class, 'deleteemployee'])->name('delete.employee');
Route::get('employee/view/{employee_id}', [EmployeeController::class, 'viewemployee'])->name('view.employee');