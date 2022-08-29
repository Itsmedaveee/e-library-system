<?php

use Illuminate\Support\Facades\Route;

 


Route::get('/', function () {
    return view('auth.login');
});     

 //Ajax
 Route::get('select-course', 'StudentsController@test');

Route::get('/registration-form', 'RegistrationsController@index'); 
Route::get('/pdf-report-logs', 'PDFCollectionsController@index'); 

Route::get('/settings', 'SettingsController@index');    
Route::patch('/settings', 'SettingsController@update');   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  //Users Resource 
Route::resource('/users', 'UsersController');
//Categories Resource
Route::resource('/categories', 'CategoriesController');  
Route::get('/categories/{category}/remove', 'CategoriesController@remove');  

Route::get('/add-book', 'InventoriesController@index'); 

//Courses

Route::get('/courses', 'CoursesController@index');
Route::post('/courses', 'CoursesController@store');
Route::get('/courses/{course}/edit', 'CoursesController@edit');
Route::patch('/courses/{course}', 'CoursesController@update');
Route::delete('/courses/{course}', 'CoursesController@destroy');

//Books Resource
 Route::resource('/books', 'BooksController');
  Route::get('/books/{book}/manage', 'BooksController@manage');
 Route::get('/books/{book}/remove', 'BooksController@remove');
 Route::get('/books/{book}/download', 'BooksController@downloadBook');

 Route::post('/books/{book}', 'BooksController@storeSerial');
 Route::delete('/books/{inventory}/delete', 'BooksController@deleteInventory');
 //Departments Resource
 Route::resource('/departments', 'DepartmentsController');
 Route::get('/departments/{department}/remove', 'DepartmentsController@remove');

 Route::get('/faculty-users', 'FacultiesController@index');
 Route::post('/faculty-users', 'FacultiesController@store');
 Route::get('/faculty-users/{user}/edit', 'FacultiesController@edit');
 Route::get('/faculty-users/{user}/show', 'FacultiesController@show');
 Route::patch('/faculty-users/{user}', 'FacultiesController@update');
 Route::get('/faculty-users/{user}/remove', 'FacultiesController@destroy');
 Route::get('/faculty-users/{user}/manage', 'FacultiesController@manage');

 //Students
 Route::resource('/students', 'StudentsController');

 Route::get('/students/{student}/remove', 'StudentsController@remove');
 Route::get('/pending-students', 'StudentsController@pending');
 Route::patch('/activate-user/{user}', 'StudentsController@activate');
 Route::patch('/deactivate-user/{user}', 'StudentsController@deactivate');
 Route::get('/students/{student}/manage', 'StudentsController@manage');
 Route::patch('/student/manage/{student}/approved', 'StudentsController@approved');
 Route::delete('/student/manage/{student}/declined', 'StudentsController@declined');

//Faculty Dashboard
 Route::get('/faculty/home', 'FacultyDashboardController@index'); 
 //Route::get('/books/{book}/show', 'FacultyDashboardController@show'); 

 //Student Dashboard

 Route::get('/student/home', 'StudentsDashboardController@index'); 
 Route::get('/books/{book}/view', 'StudentsDashboardController@show'); 
 Route::get('/request-books', 'StudentsDashboardController@pendingRequest'); 
 Route::patch('/request-books/{inventory}/cancel', 'StudentsDashboardController@cancel'); 

 //Collections
 Route::get('/collections', 'CollectionsController@index');
 //PDF
 Route::get('/pdf-collections', 'PDFCollectionsController@index');
 Route::get('/collections/{collect}/view-pdf', 'PDFCollectionsController@viewPDF');


 //Borrow
 Route::patch('/borrow/{book}', 'BorrowController@update');

 //Pending Borrows
 Route::get('/pending-borrows', 'PendingBorrowsController@pending');
 Route::get('/book/{inventory}/manage', 'PendingBorrowsController@manage');
 Route::patch('/request-borrow/{inventory}', 'PendingBorrowsController@approved');
 Route::patch('/request-borrow/{inventory}/cancel', 'PendingBorrowsController@cancel');

 //Borrows Book
 Route::get('/borrows', 'BorrowController@index');
 Route::get('/book-borrow/{inventory}/manage', 'BorrowController@manage');

 //Return Book Update
 Route::patch('/return-borrow-book/{inventory}', 'ReturnBooksController@return');

 //Reports logs

 Route::get('/reports', 'ReportLogsController@index');
