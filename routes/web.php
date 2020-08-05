<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', 'MainController@Accueil');
//front
Route::get('categorie/{categorie}', 'MainController@CategorieProduit')->name('CategorieProd');
Route::get('produit/{produit}', 'MainController@ProduitSingle')->name('Produit_single');
Route::post('produit_search', 'MainController@ProduitSearch')->name('Produit_search');
//back
Route::get('Admin/create', 'AdminController@create')->name('Admin.create');
Route::post('Admin/update/{user_id}', 'AdminController@update')->name('Admin.update');
Route::post('Admin/update_password/{user_id}', 'AdminController@Passupdate')->name('Admin.update_password');
Route::get('admin', 'MainController@adminlogin');

Route::get('categorie_search','CategorieController@search')->name('search.categorie');
Route::get('produit_search','ProduitController@search')->name('search.produit');

Route::resources([
    'Categorie'=>'CategorieController',
    'Produit'=>'ProduitController'
]);

