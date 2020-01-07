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

Route::post('supplies.filter', 'suppliesController@filter')->name('supplies.filter');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('privacy', 'privacyController');
Route::resource('offer', 'QuotationsController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Sales', 'salesController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Finance', 'financeController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Maintenance', 'maintenanceController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('MalfunctionView', 'malfunctionviewController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Supplies', 'suppliesController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Malfunction', 'malfunctionController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Customer', 'customerController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('offercheck', 'OfferCheckController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Customerdetail', 'customerdetailController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('workorder', 'WorkorderController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('Supplies', 'suppliesController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('bkrcheck', 'BkrCheckController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('lease', 'LeaseController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('offermail', 'offermailController')-> middleware(\App\Http\Middleware\CheckRole::class);
Route::resource('workordermail', 'WorkordermailController')-> middleware(\App\Http\Middleware\CheckRole::class);


