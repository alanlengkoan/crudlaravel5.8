<?php

// ini untuk routes default
// 'untuk url', 'untuk nama controller @ nama function yg'
Route::get('/', 'Crud@home');
Route::get('/about', 'Crud@about');
Route::get('/data', 'Crud@data');
Route::get('/add', 'Crud@add');

// post data
Route::post('/add_action', 'Crud@add_action');