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
Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/', function () {
    return view('auth.login');
});
Route::group(array('before' => 'auth'), function() {

	/*
	 | Sign Out (GET)
	 | --
	 */
	Route::get('/account/sign-out', array(
		'as' => 'account-sign-out',
		'uses' => 'UsersController@getSignOut'
	));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/user/create', 'UsersController@create')->name('user.create');
Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');
Route::post('/user/store', 'UsersController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UsersController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UsersController@update')->name('user.update');
Route::get('/profile', 'ProfilesController@index')->name('profile');
Route::get('/profile/edit', 'ProfilesController@edit')->name('profile.edit');
Route::post('/profile/update', 'ProfilesController@update')->name('profile.update');


Route::get('/roles', 'RolesController@index')->name('roles');
Route::get('/role/create', 'RolesController@create')->name('role.create');
Route::post('/role/store', 'RolesController@store')->name('role.store');
Route::get('/role/edit/{id}', 'RolesController@edit')->name('role.edit');
Route::post('/role/update/{id}', 'RolesController@update')->name('role.update');
Route::get('/role/delete/{id}', 'RolesController@destroy')->name('role.delete');



Route::get('/company/create', 'CompaniesController@create')->name('company.create');
Route::post('/company/store', 'CompaniesController@store')->name('company.store');
Route::get('/companies', 'CompaniesController@index')->name('companies');
Route::get('/company/edit/{id}', 'CompaniesController@edit')->name('company.edit');
Route::post('/company/update/{id}', 'CompaniesController@update')->name('company.update');
Route::get('/company/delete/{id}', 'CompaniesController@destroy')->name('company.delete');


Route::get('/contact/create', 'ContactsController@create')->name('contact.create');
Route::post('/contact/store', 'ContactsController@store')->name('contact.store');
Route::get('/contacts', 'ContactsController@index')->name('contacts');
Route::get('/contact/edit/{id}', 'ContactsController@edit')->name('contact.edit');
Route::post('/contact/update/{id}', 'ContactsController@update')->name('contact.update');
Route::get('/contact/delete/{id}', 'ContactsController@destroy')->name('contact.delete');

Route::get('/process/create', 'ProcessController@create')->name('process.create');
Route::post('/process/store', 'ProcessController@store')->name('process.store');
Route::get('/process', 'ProcessController@index')->name('process');


Route::get('/response/create', 'ResponsesController@create')->name('response.create');
Route::post('/response/store', 'ResponsesController@store')->name('response.store');
Route::get('/responses', 'ResponsesController@index')->name('responses');
Route::get('/response/edit/{id}', 'ResponsesController@edit')->name('response.edit');
Route::post('/response/update/{id}', 'ResponsesController@update')->name('response.update');
Route::get('/response/delete/{id}', 'ResponsesController@destroy')->name('response.delete');










