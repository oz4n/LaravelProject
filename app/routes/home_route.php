<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::get('/', function() {
    return View::make('hello');
});

Route::get('home/add', 'HomeController@add');
Route::post('home/add', 'HomeController@add');
