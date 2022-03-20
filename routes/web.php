<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});     

Route::get('/test/{book}', function ($book) {
      // file path
     $path = public_path('storage/avatar' . '/' . $book->upload_file);
      // header
     $header = [
       'Content-Type' => 'application/pdf',
       'Content-Disposition' => 'inline; filename="' . $book . '"'
     ];
    return response()->file($path, $header);
})->name('pdf');

Route::get('/settings', 'SettingsController@index');   
Route::patch('/settings', 'SettingsController@update');   
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
 Route::get('/faculty-users/{user}/show', 'FacultiesController@show');
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