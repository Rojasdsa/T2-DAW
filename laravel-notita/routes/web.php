<?php

use App\Http\Controllers\NotesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', [ NotesController::class, 'notes' ]);

Route::get('notes/{id}', [ NotesController::class, 'detail' ]) -> name('notes.detail');
Route::get('notes/new', [ NotesController::class, 'newNote' ]);


Route::post('notes', [ NotesController::class, 'create' ]) -> name('notes.create');


