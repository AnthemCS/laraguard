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

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/test', function () {
    //
    $invoice = \ConsoleTVs\Invoices\Classes\Invoice::make()
        ->addItem('Test Item', 10.25, 2, 1412)
        ->addItem('Test Item 2', 5, 2, 923)
        ->addItem('Test Item 3', 15.55, 5, 42)
        ->addItem('Test Item 4', 1.25, 1, 923)
        ->addItem('Test Item 5', 3.12, 1, 3142)
        ->addItem('Test Item 6', 6.41, 3, 452)
        ->addItem('Test Item 7', 2.86, 1, 1526)
        ->number(4021)
        ->tax(21)
        ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
        ->customer([
            'name'      => 'Èrik Campobadal Forés',
            'id'        => '12345678A',
            'phone'     => '+34 123 456 789',
            'location'  => 'C / Unknown Street 1st',
            'zip'       => '08241',
            'city'      => 'Manresa',
            'country'   => 'Spain',
        ]);
       // ->download('demo');
    //or save it somewhere
    //$invoice->save('public/myinvoicename.pdf');
    return view('invoices.invoice-preview', ["invoice" => $invoice]);
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
Route::get('/reservations/{rsvId}/remove-room', 'ReservationController@getRemoveRoomFromRsv')->name('reservations.remove-room');
Route::get('/reservations/{rsvId}/status/{statusId}', 'ReservationController@getReservationStatusChange')->name('reservations.status-change');
Route::get('/reservations/{rsvId}/add-service', 'ReservationController@getAddServiceToRsv')->name('reservations.add-service');

# Room Routes
Route::resource('/rooms', 'RoomController');

# Guest Routes
Route::resource('guests', 'GuestController');

# Products/ Services
Route::resource('services', 'ServicesController');

# Invoices
Route::resource('invoices', 'InvoiceController');
Route::get('/invoices/add-item', 'InvoiceController@getAddItemToBillingInvoice')->name('invoices.add-item');