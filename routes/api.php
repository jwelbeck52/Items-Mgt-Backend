<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// use App\Http\Controllers\API\ItemController;
// use App\Http\Controllers\API\SearchController;
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

// Route::get('items',  [ItemController::class,'index']);
// Route::get('items/{item}',  [ItemController::class,'show']);
// Route::post('items',  [ItemController::class,'store']);
// Route::put('items/{item}',  [ItemController::class,'update']);
// Route::delete('items/{item}',  [ItemController::class,'destroy']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::get('search/{name}',  [SearchController::class,'search']);
// });

Route::post('/register',  [AuthController::class,'register']);
Route::post('/login',  [AuthController::class,'login']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('/items', ItemController::class);
    Route::resource('/wishlist', WishlistController::class);
    Route::resource('/categories', CategoryController::class);
    Route::get('search/{name}',  [SearchController::class,'search']);
    Route::post('/logout',  [AuthController::class,'logout']);
});


// Route::get('/categories', [CategoryController::class,'index']);
// // Route::get('/items', [ItemController::class,'index']);
// Route::get('/wishes', [WishlistController::class,'index']);


