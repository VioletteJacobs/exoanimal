<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ImageController;
use App\Models\Animal;
use Database\Seeders\AnimalSeeder;
use Illuminate\Support\Facades\Route;

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
    $DBAnimal = Animal::all();
    return view('welcome', compact("DBAnimal"));
});
// Route::get('/upload', [AnimalController::class, "upload"]);
route::get("/download-animal/{id}",[AnimalController::class, "download"]);

route::resource('animals', AnimalController::class);
route::resource('images', ImageController::class);
