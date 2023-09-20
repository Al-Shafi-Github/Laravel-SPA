<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UploadImageController;


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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::post('/upload-image', [UploadImageController::class, 'upload']);
Route::get('/upload-image', [UploadImageController::class, 'getImages']);
// Route::get('/upload-image', [UploadImageController::class, 'viewPage']);
Route::get('/', [PageController::class, 'getImages']);
