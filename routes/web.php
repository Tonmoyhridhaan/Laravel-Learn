<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;

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

// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::get('/about-us/{category}', function ($c) {
//     //echo 'Hello, category = '.$c;
//     $name = 'Tonmoy';
//     return view('about',['category' => $c , 'name' => $name]);
// });

Route::get('/history/{category}', [HistoryController::class, 'home']);



//For Layout Start
//Route::get('/', [LayoutController::class, 'home']);
Route::get('/', [LayoutController::class, 'login']);
Route::get('/login', [LayoutController::class, 'login']);
Route::get('/home', [LayoutController::class, 'login']);

Route::get('/register', [LayoutController::class, 'register']);
//For Layout End

Route::post('store-login',[AuthController::class, 'storeLogin']);


Route::middleware(['isLoggedIn']) -> group(function(){
    Route::get('dashboard',[AuthController::class, 'dashboard']);
    Route::get('logout',[AuthController::class, 'logout']);
    Route::get('charts', [LayoutController::class, 'charts']);
    Route::get('tables', [LayoutController::class, 'tables']);
    Route::get('update-password', [EmployeeController::class, 'update_password']);
    Route::post('store-update-password/{id}', [EmployeeController::class, 'store_update_password']);
});

Route::middleware(['isLoggedIn','isAdmin']) -> group(function(){
    Route::get('admin1', [AuthController::class, 'admin1']);
    Route::get('insert', [EmployeeController::class, 'insert']);
    Route::post('store-employee',[EmployeeController::class, 'store']);
    Route::get('employees', [EmployeeController::class, 'index']);
    Route::get('edit/{id}', [EmployeeController::class, 'edit']);
    Route::post('update/{id}',[EmployeeController::class, 'update']);
    Route::get('delete/{id}', [EmployeeController::class, 'delete']);
});   

Route::middleware(['isLoggedIn','isTeacher']) -> group(function(){
    Route::get('teacher', [AuthController::class, 'teacher']);
    Route::post('update-teacher/{id}',[EmployeeController::class, 'update_teacher']);
    Route::get('teacher-edit/{id}', [EmployeeController::class, 'teacher_edit']);
    Route::get('teachers', [AuthController::class, 'teachers']);
}); 


Route::get('create-student', [StudentController::class,'create']);
Route::post('store-student', [StudentController::class,'store']);

Route::get('products', [ProductController::class,'all']);

#file upload
Route::get('upload', [UploadController::class,'upload']);
Route::post('upload-image', [UploadController::class,'uploadImage']);

