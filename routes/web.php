<?php

use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('welcome');
});
        
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  //Users Resource 
Route::resource('/users', 'UsersController');
//Categories Resource
Route::resource('/categories', 'CategoriesController');  

//Books Resource
 Route::resource('/books', 'BooksController');
 Route::get('/books/{book}/download', 'BooksController@downloadBook');
 //Departments Resource
 Route::resource('/departments', 'DepartmentsController');

 Route::get('/faculty-users', 'FacultiesController@index');
 Route::post('/faculty-users', 'FacultiesController@store');
 Route::get('/faculty-users/{user}/edit', 'FacultiesController@edit');
 Route::patch('/faculty-users/{user}', 'FacultiesController@update');
 Route::delete('/faculty-users/{user}', 'FacultiesController@destroy');

 //Students
 Route::resource('/students', 'StudentsController');


//Faculty Dashboard
 Route::get('/faculty/home', 'FacultyDashboardController@index'); 
 Route::get('/categories/{category}/show', 'FacultyDashboardController@show'); 

 //Student Dashboard

 Route::get('/student/home', 'StudentsDashboardController@index');

 //Collections
 Route::get('/collections', 'CollectionsController@index');
 //PDF
 Route::get('/pdf-collections', 'PDFCollectionsController@index');