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
    return view('tickets.index');
});

Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('tickets', 'TicketsController@index');
Route::get('/tickets/{slug?}', 'TicketsController@show');
Route::get('/tickets/{slug?}/edit', 'TicketsController@edit');
Route::post('/tickets/{slug?}/edit', 'TicketsController@update');
Route::post('/tickets/{slug?}/delete', 'TicketsController@destroy');
Route::post('/comments', 'CommentsController@newComment');

Route::get('sendemail', function () {
    $data = array(
        'name' => "Ticket",
    );
    Mail::send('mails.welcome', $data, function ($message) {
        $message->from('opudaemmanuel@gmail.com', 'Ticket');
        $message->to('opudaemmanuel@gmail.com');
    });

});

