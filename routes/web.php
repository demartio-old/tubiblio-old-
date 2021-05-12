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

//------------------------CRUD----------------------------

    //------------------------User---------------------------
    //------------------------EndUser------------------------

    //------------------------Book---------------------------
    Route::resource('/books', 'BookController');
    //------------------------EndBook------------------------

    //------------------------Feedback-----------------------
    //------------------------EndFeedback--------------------

//------------------------EndCRUD-------------------------


//------------------------Debug---------------------------

    Route::any('/debug', 'BookController@getLastId');

//------------------------EndDebug------------------------




//--------------------VIEWS----------------------
//---------------LOGIN------------------
Route::get('/login/index', function () {
        return view('login.index');
    });

Route::any('/index/{formType}', 'UserController@indexFormSwitch');

Route::get('/login/register', function () {
        return view('login.register');
    });

Route::get('/login/forgot', function () {
        return view('login.forgot');
    });

Route::get('/login/reset', function () {
        return view('login.reset');
    });
//---------------ENDLOGIN------------------


//---------------LIBRARY------------------
Route::get('/', function () {
        return view('welcome.index');
    });

Route::get('/personal', function () {
        return view('welcome.personal');
    });

//    Route::get('/home', function () {
//        return view('welcome.home');
//    });

Route::get('/home', 'BookController@showLastBooks');

Route::any('/bookSheet/{id}', 'BookController@showBookSheet');

Route::any('/bookCategoryList/{category}', 'BookController@showBookCategoryList');
Route::any('/bookCategoryList/{category}/{type}/{order}', 'BookController@filterBook');
Route::any('/bookFavsList/{category}/{type}/{order}', 'BookController@showFavs');
Route::any('/selectBookView', 'BookController@selectBook');
Route::any('/resultsBookView/{keyword?}/{type}/{order}', 'BookController@resultsBooks');
Route::any('/personal/friends','UserController@showFriends');
//Route::any('/selectBookView/{type}/{order}', function (){
//    return view('welcome.index');
//});



//    Route::any('/bookSheet/{id}', function ($id) {
//        return view('welcome.about');
//    });

Route::any('/bookTier', function () {
        return view('welcome.bookTier');
    });

Route::any('/bookList', function () {
        return view('welcome.bookList');
    });

Route::any('/resume', function () {
        return view('welcome.resume');
    });

Route::any('/services', function () {
        return view('welcome.services');
    });

Route::any('/portfolio', function () {
        return view('welcome.portfolio');
    });

Route::any('/contact', function () {
        return view('welcome.contact');
    });

Route::any('/bookSheetCreate', function () {
        return view('books.create');
//        return view('welcome.bookSheetCreate');
    });

//Route::any('/bookCategoryList', function () {
//        return view('welcome.bookCategoryList');
//    });

//---------------ENDLIBRARY------------------
//--------------------ENDVIEWS----------------------


//--------------------CONTROLLERS----------------------

Route::get('/bookController', 'BookController@index');

Route::get('/user/setting', 'UserController@showSettings');

//------------------CONTROLLERS---------------------

//------------------UPDATE&STORE---------------------
//Route::post('book/update/{id}', [
//    'middleware' => 'auth',
//    'before' => 'csrf',
//    'uses' => 'BookController@udpate'
//]);

Route::any('book/store', [
//    'middleware' => 'auth',
//    'before' => 'csrf',
    'uses' => 'BookController@store'
]);
//------------------END_UPDATE&STORE---------------------


//
