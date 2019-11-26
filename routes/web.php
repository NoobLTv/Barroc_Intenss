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
    return view('welcome');
});

Auth::routes();

Route::post('welcome/submit', function () {
  return (new App\Mail\sale);
})->name('contact-form-submit');

Route::post('malfunction/submit', function () {
    return (new App\Mail\SendMalfunction());
})->name('malfunction-submit');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('privacy', 'privacyController');
Route::resource('offer', 'QuotationsController');
Route::resource('Sales', 'salesController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Finance', 'financeController');
Route::resource('Maintenance', 'maintenanceController');
Route::resource('Supplies', 'suppliesController');
Route::resource('Malfunction', 'malfunctionController');
Route::resource('Customer', 'customerController');
Route::resource('offercheck', 'OfferCheckController');
Route::resource('password', 'RegisterController');
Route::resource('workorder', 'WorkorderController');
Route::resource('Purchase', 'purchaseController');

Route::resource('scheduleafault', 'ScheduleafaultController');
Route::resource('scheduleafaultshow', 'ScheduleafaultshowController');
