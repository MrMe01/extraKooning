<?php


/*
       // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
        // Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
*/



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


 
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home','HomeController@index')->name('home');


Route::resource('/Actividades','ActivityController');

Route::resource('/Categorias','CategoriesController');

Route::resource('/Entradas','TicketController');

Route::resource('/Campañas','CampaignController');

Route::resource('/Blogs','BlogsController');
/*
Route::get('pruebas', function(){
	return view('login.login');
});
*/