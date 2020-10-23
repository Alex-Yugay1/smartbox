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
$adminURL = env('APP_ADMIN_URL', 'admin');

Route::get('/', 'MainController@index')->name('index');
Route::get('/news/', 'MainController@news')->name('news');
Route::get('/news/{newsId}', 'MainController@newsDetail');
Route::get('/services/', 'MainController@services')->name('services');
Route::get('/services/{serviceId}', 'MainController@service')->name('detail_service');
Route::get('/gallery/', 'MainController@gallery')->name('gallery');
Route::get('/contacts/', 'MainController@contacts')->name('contacts');
Route::get('/faq/', 'MainController@faq')->name('faq');
Route::get('/prices/', 'MainController@prices1')->name('prices1');
Route::get('/prices-2/', 'MainController@prices2')->name('prices2');
Route::get('/prices-3/', 'MainController@prices3')->name('prices3');
Route::post('/form/submit/', 'MainController@store')->name('store');

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::group([
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['auth']
    ],
    function() {
        Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    }
);