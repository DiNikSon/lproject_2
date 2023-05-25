<?php

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
$Controller = "App\Http\Controllers\MainController@";

Route::get('/', $Controller.'main');

Route::get('/PO', $Controller.'PO');

Route::get('/PO/add', $Controller.'PO_add');

Route::post('/PO/added', $Controller.'PO_added');

Route::get('/PO/edit', $Controller.'PO_edit');

Route::post('/PO/edited', $Controller.'PO_edited');

Route::get('/PO/list', $Controller.'PO_list');

Route::get('/identify', $Controller.'identify');

Route::get('/identify/file', $Controller.'identify_file');

Route::post('/identify/file-add', $Controller.'identify_file_add');

Route::get('/identify/folder', $Controller.'identify_folder');

Route::post('/identify/folder-add', $Controller.'identify_folder_add');

Route::get('/identify/registry', $Controller.'identify_registry');

Route::post('/identify/registry-add', $Controller.'identify_registry_add');

Route::get('/trace', $Controller.'trace');

Route::get('/trace/add', $Controller.'trace_add');

Route::post('/trace/added', $Controller.'trace_added');

Route::get('/trace/load', $Controller.'trace_load');

Route::post('/trace/load/folder', $Controller.'trace_load_folder');

Route::post('/trace/load/shot', $Controller.'trace_load_shot');

Route::get('/trace/search', $Controller.'trace_search');

Route::post('/trace/searched', $Controller.'trace_searched');

