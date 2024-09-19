<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FundingController;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function (Request $request) {
    return response()->json(['Home', 'Profile', 'About', 'Contact Us']);
});

/*
Route::get('/donatur', function (Request $request) {
    return response()->json(
        [
            [
                'id' => 1,
                'name' => 'Garcia'
            ],
            [
                'id' => 2,
                'name' => 'Bryan'
            ],
            [
                'id' =>3,
                'name' => 'Bryan Farrel'
            ]
        ]
    );
});
*/


Route::group(['middlewere' => 'auth:sanctum'], function() {
// API CRUD  Funding
Route::get('/funding', [FundingController::class, 'index']); //get all data
Route::post('/funding', [FundingController::class, 'store']);
Route::get('/funding{id}', [FundingController::class, 'show']);
Route::put('/funding{id}', [FundingController::class, 'update']);
Route::delete('/funding{id}', [FundingController::class, 'destroy']);

// api CRUD Donation
Route::apiResource('donation', DonationController::class);

Route::post('login', [AuthController::class, 'login']);

Route::post('register', [AuthController::class, 'register']);

Route::post('logout', [AuthController::class, 'logout']);
});