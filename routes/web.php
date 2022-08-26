<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
/* 
 * CRUD
 *CREATE - CRIAR DADOS  X
 *READ - LER DADOS DO BANCO X
 *UPDATE - ATUALIZAR UM DADO ESPECÍFICO X
 *DELETE - DELETAR UM DADO ESPECÍFICO
*/

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/read', [PostController::class, 'read']);
Route::get('/posts/all', [PostController::class, 'all']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);


Route::get('/', function () {
    return view('welcome');
});
