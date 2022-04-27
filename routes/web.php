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


Route::get('/', 'WebSiteController@home')->name('home');
Route::get('linha', 'WebSiteController@linha')->name('linhas');

Route::get('produtos', 'WebSiteController@produtos')->name('produtos');
Route::get('{linha}/{slug}', ['as' => 'produto.item', 'uses' => 'WebSiteController@getSingleProduto'])->where('linha', '[\w\d\-\_]+')->where('slug', '[\w\d\-\_]+');

route::get('mail', 'mailController@index');
route::post('postMail', 'mailController@post');
Route::get('csrf', function () {
    return Session::token();
});

    Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
        Route::get('/', 'HomeController@index')->name('admin.home');

        Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

        Route::resource('admin/quemsomos', '\App\Http\Controllers\QuemSomosController');
        Route::resource('admin/faleconosco', '\App\Http\Controllers\FaleConoscoController');

        Route::resource('admin/linha', '\App\Http\Controllers\LinhaController');
        Route::resource('admin/produto', '\App\Http\Controllers\ProdutoController');

        Route::resource('usuario', 'UserController');
        Route::get('usuario/{usuario}/editar_senha', 'UserController@editPassword')->name('usuario.editar_senha');
        Route::post('usuario/atualizar_senha/{usuario}', 'UserController@updatePassword')->name('usuario.atualizar_senha');
      });
      Auth::routes();
