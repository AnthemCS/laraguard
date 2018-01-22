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
    return view('welcome', ['rooms' => App\Room::all()]);
});

Route::get('/test', function () {
    return view('home.test');
});

Route::get('/reservation/{roomId}/create', 'GuestReservationController@getCreateReservation');
Route::post('/reservation/{roomId}/create', 'GuestReservationController@postCreateReservation');

Auth::routes();
# Home Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/free-today', 'HomeController@getFreeRoomsToday')->name('home.free-today');
Route::get('home/create-reservation/{roomId}', 'HomeController@getNewReservation')->name('home.new-reservation');

# Reservation Routes
Route::resource('reservations', 'ReservationController');
Route::get('/reservations/{rsvId}/add-room', 'ReservationController@getAddRoomToRsv')->name('reservations.add-room');
Route::get('/reservations/{rsvId/remove-room', 'ReservationController@getRemoveRoomFromRsv')->name('reservations.remove-room');

# Room Routes
Route::resource('/rooms', 'RoomController');

# Guest Routes
Route::resource('guests', 'GuestController');

# Products/ Services
Route::resource('services', 'ServicesController');

# Invoices
Route::resource('invoices', 'InvoiceController');