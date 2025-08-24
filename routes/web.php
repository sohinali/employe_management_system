<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;
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

Route::get('about/', function () {
    return view('about');
});

//Route::any('/updated/{id}',[EmployController::class,'updatedEmp'])->name('updatedEmp');
Route::get('/department',[EmployController::class,'show'])->name('department');
Route::get('/results',[EmployController::class,'dp'])->name('staffAdd');
Route::any('/add',[EmployController::class,'addEmp'])->name('addEmp');
Route::any('/deletestaff/{id}',[EmployController::class,'deletestaff'])->name('deletestaff');
Route::any('/delete/{id}',[EmployController::class,'deleteEmp'])->name('deleteEmp');
Route::any('/update/{id}',[EmployController::class,'updateEmp'])->name('updateEmp');

Route::any('/update/staff/{id}',[EmployController::class,'updatestaff'])->name('updatestaff');
Route::any('/staff/add/',[EmployController::class,'addstaff'])->name('addstaff');
Route::get('/staff',[EmployController::class,'staffShow'])->name('staff');
//Route::any('/updated/{id}',[EmployController::class,'updatedstaff'])->name('updatedstaff');
// Route::get('/data',[EmployController::class,'upstaffShow']);

Route::any('/updated/employee/{id}',[EmployController::class,'updatedEmp'])->name('updatedEmp');
Route::any('/updated/staff/{id}',[EmployController::class,'updatedstaff'])->name('updatedstaff');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/depart', function () {
    return view('department');
});

Route::post('/login',[EmployController::class,'login'])->name('login');


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('username')){
        session()->pull('username',null);
    }
    return view('welcome');
});


