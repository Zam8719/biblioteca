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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('books', 'Book\BookController');
Route::apiResource('books.loans', 'Book\BookLoanController', ['only' => ['index']]);
Route::apiResource('books.Users', 'Book\BookUserController', ['only' => ['index']]);

Route::apiResource('users', 'User\UserController');
Route::apiResource('users.loans', 'User\UserLoanController', ['only' => ['index']]);
Route::apiResource('users.books', 'User\UserBookController', ['only' => ['index']]);

Route::apiResource('loans', 'Loan\LoanController');
