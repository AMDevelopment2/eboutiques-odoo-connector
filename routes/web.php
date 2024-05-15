<?php

use Illuminate\Support\Facades\Route;
use Alazzidev\LaraodooXmlrpc\Facades\Odoo;

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
    $searchResult = Odoo::search('res.partner', []);
    $records = Odoo::read('res.partner', $searchResult, ['name', 'id']);
    dd($records);
    return view('welcome');
});
