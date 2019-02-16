<?php

use App\Http\Controllers\InfoController;

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

Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::group(['middleware' => 'CheckAdmin'], function () {
    Route::get('/admin', 'adminController@index');
    Route::get('/admin/slider', 'adminController@slider');
    Route::get('/admin/about', 'adminController@about');
    Route::get('/admin/people', 'adminController@people');
    Route::get('/admin/info', 'adminController@info');
    Route::get('/admin/portfolio', 'adminController@portfolio');

    route::post('/admin/info/store', 'InfoController@store');
    route::get('/admin/info/edit/{id}', 'InfoController@edit')->name('editInfo');
    route::patch('/admin/info/update/{id}', 'InfoController@update');

    route::post('/admin/about/store', 'AboutController@store');
    route::get('/admin/about/edit/{id}', 'AboutController@edit')->name('editAbout');
    route::patch('/admin/about/update/{id}', 'AboutController@update');

    route::post('/admin/people', 'PeopleController@create');
    route::get('/admin/people/edit/{id}', 'PeopleController@edit')->name('editPeople');
    route::get('/admin/people/delete/{id}', 'PeopleController@destroy')->name('deletePeople');
    route::patch('/admin/people/update/{id}', 'PeopleController@update');

    route::post('/admin/slider', 'SliderController@create');
    route::get('/admin/slider/edit/{id}', 'SliderController@edit')->name('editSlider');
    route::get('/admin/slider/delete/{id}', 'SliderController@destroy')->name('deleteSlider');
    route::patch('/admin/slider/update/{id}', 'SliderController@update');

    route::post('/admin/project', 'ProjectController@store');
    route::get('/admin/project/edit/{id}', 'ProjectController@edit')->name('editProject');
    route::patch('/admin/project/update/{id}', 'ProjectController@update');
    route::get('/admin/project/delete/{id}', 'ProjectController@destroy')->name('deleteProject');








});
