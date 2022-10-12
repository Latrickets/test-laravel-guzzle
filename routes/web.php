<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [AutentificarController::class, 'login'])->name('loginuser');
Route::get('/register', [AutentificarController::class, 'register'])->name('registeruser');
Route::get('/registe', [AutentificarController::class, 'register'])->name('login');
Route::get('/products', [ProductController::class, 'index'])->name('index');
Route::get('/products/{slug}', [ProductController::class, 'get'])->name('get');
Route::post('/products', [ProductController::class, 'index'])->name('index');



// $client = new Client();
// $headers = [
//   'Authorization' => 'Bearer 11|VCmmwnjGHuEDahwmVr493D0BZHct3xvRogsHX6EW'
// ];
// $request = new Request('GET', 'https://crud.jonathansoto.mx/api/products', $headers);
// $res = $client->sendAsync($request)->wait();
// echo $res->getBody();
