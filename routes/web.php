<?php
use App\Http\Controllers\CropImageController;
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

Route::get('/', [CropImageController::class, 'index']);
Route::post('crop-image-upload-ajax', [CropImageController::class, 'cropImageUploadAjax']);
