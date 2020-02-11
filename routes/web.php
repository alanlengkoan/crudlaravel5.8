<?php

// ini untuk routes default
// 'untuk url', 'untuk nama controller @ nama function yg'
Route::get('/', 'Crud@home');
Route::get('/about', 'Crud@about');
Route::get('/data', 'Crud@data');

// insert data
Route::get('/add', 'Crud@add');
Route::post('/add_action', 'Crud@add_action');

// update data
Route::get('/upd/{id}', 'Crud@upd');
Route::put('/upd_action/{id}', 'Crud@upd_action');

// delete data
Route::get('/del/{id}', 'Crud@del');