<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\LocationController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('products', [ApiController::class, 'products']);
Route::get('categories', [ApiController::class, 'categories']);
Route::post('insert-product', [ApiController::class, 'createProduct']);
Route::get('product/{id}', [ProductController::class, 'getProductById']);

# location related
Route::get('divisions', [LocationController::class, 'divisions']);
Route::post('insert-division', [LocationController::class, 'createDivisions']);
Route::post('insert-district', [LocationController::class, 'createDistricts']);
Route::get('districts/{divisionId}', [LocationController::class, 'getDistricts']);

Route::post('insert-student', [ApiController::class, 'createStudent']);
Route::post('insert-teacher', [ApiController::class, 'createTeacher']);
Route::get('students', [ApiController::class, 'listStudents']);
Route::get('teachers', [ApiController::class, 'listTeachers']);
Route::get('teacher/{id}', [ApiController::class, 'getTeacher']);
Route::post('update-teacher', [ApiController::class, 'updateTeacher']);
Route::get('student/{id}', [ApiController::class, 'getStudent']);
Route::post('update-student', [ApiController::class, 'updateStudent']);


