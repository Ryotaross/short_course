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

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::resource('/course','CourseController');

Route::get('/course/{course}/hole','CourseController@hole_create')->name('hole.create');

Route::post('/course/{course}/hole','CourseController@hole_store')->name('hole.store');

Route::get('/course/{course}/hole/edit','CourseController@hole_edit')->name('hole.edit');

Route::post('/course/{course}/hole/edit','CourseController@hole_update')->name('hole.update');


Route::prefix('course')->name('course.')->group(function () {
    Route::put('/{course}/like', 'CourseController@like')->name('like')->middleware('auth');
    Route::delete('/{course}/like', 'CourseController@unlike')->name('unlike')->middleware('auth');
});

Route::prefix('course')->name('course.')->group(function () {
    Route::put('/{course}/went', 'CourseController@went')->name('went')->middleware('auth');
    Route::delete('/{course}/went', 'CourseController@unwent')->name('unwent')->middleware('auth');
});

Route::prefix('course/{course}')->group(function(){
    Route::resource('/review','ReviewController')->except(['edit','update']);
});

Route::prefix('course/{course}')->group(function(){
    Route::resource('/offer','OfferController')->except(['edit','update','index','show','destroy']);
});

Route::prefix('/control')->group(function(){
    Route::get('/offer','OfferController@index')->name('offer.index');

    Route::get('/offer/{offer}','OfferController@show')->name('offer.show');

    Route::delete('/offer/{offer}/destroy','OfferController@destroy')->name('offer.destroy');

});



Route::resource('/myinfo','MyinfoController')->except(['destroy']);



/*
Route::prefix('course/{course}')->group(function(){
    Route::resource('/hole','HoleController');
});
*/





