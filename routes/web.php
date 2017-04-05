<?php

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

Route::get('/', 'ReportsController@indexTest');

#Reports
Route::get('reports', 'ReportsController@index'); #show all reports

Route::get('reports/showadd', 'ReportsController@showAddReportForm')->middleware('auth');
Route::post('reports/add', 'ReportsController@add')->middleware('auth');

Route::get('reports/{report}', 'ReportsController@show'); #show a single report
Route::get('reports/{report}/edit', 'ReportsController@edit')->middleware('auth');
Route::patch('reports/{report}/update', 'ReportsController@update')->middleware('auth');

Route::get('reports/{report}/delete', 'ReportsController@delete')->middleware('auth');
Route::get('reports/{report}/entities/showadd', 'EntitiesController@showAddForm')->middleware('auth');
Route::post('reports/{report}/entities/add', 'EntitiesController@add')->middleware('auth');

Route::post('reports/{report}/savephoto', 'ReportsController@savePhoto')->middleware('auth');
Route::post('reports/{report}/savecomment', 'ReportsController@saveComment')->middleware('auth');


#Entities
Route::get('entities', 'EntitiesController@index');

Route::get('entities/showadd', 'EntitiesController@showAddForm')->middleware('auth');
Route::get('entities/add', 'EntitiesController@add')->middleware('auth');

Route::get('entities/{entity}', 'EntitiesController@show');
Route::get('entities/{entity}/showedit', 'EntitiesController@showEditForm')->middleware('auth');
Route::patch('entities/{entity}/edit', 'EntitiesController@edit')->middleware('auth');

Route::get('entities/{entity}/reports/showadd', 'ReportsController@showAddReportToEntityForm')->middleware('auth');
Route::post('entities/{entity}/reports/add', 'ReportsController@addReportToEntity')->middleware('auth');

Route::post('entities/{entity}/savephoto', 'EntitiesController@savePhoto')->middleware('auth');
Route::post('entities/{entity}/savecomment', 'EntitiesController@saveComment')->middleware('auth');

Route::get('entities/{entity}/delete', 'EntitiesController@delete')->middleware('auth');


Route::get('/missing', function() {
    return 'Missing Persons';
});

Route::get('/wanted', function() {
    return 'Wanted';
});

Route::get('/persons', function() {
    return 'Persons';
});


Auth::routes();

Route::get('/home', 'HomeController@index');
