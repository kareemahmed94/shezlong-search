<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TherapistController;

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

Route::get('/api/therapist/search', [\App\Http\Controllers\API\TherapistController::class , 'get_therapist_card'])->name('api.therapist.search');
Route::get('/api/therapist/profile_review', [\App\Http\Controllers\API\TherapistController::class , 'get_profile_review'])->name('api.therapist.profile_review');

Route::get('/', [TherapistController::class , 'search']);
