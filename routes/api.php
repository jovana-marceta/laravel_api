<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all employees
Route::get('employees', 'EmployeeController@getEmployee');

// Get Specific employee
Route::get('employee/{id}', 'EmployeeController@getEmployeeById');

// Add new Empoyee
Route::post('addEmployee', 'EmployeeController@addEmployee');

// Update Employee
Route::put('updateEmployee/{id}', 'EmployeeController@updateEmployee');

// Delete Employee
Route::delete('deleteEmployee/{id}', 'EmployeeController@deleteEmployee');