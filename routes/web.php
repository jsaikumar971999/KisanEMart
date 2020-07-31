<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

/*former Controllers */

Route::get('/price_detailes', 'kisan\FormerController@price_detailes')->name('former.price_detailes');
Route::get('/former_reg', 'kisan\FormerController@index')->name('former.former_reg');
Route::get('/aboutus', 'kisan\FormerController@aboutus')->name('former.aboutus');


/* benfits */
Route::get('/benefits', 'kisan\FormerController@benefits')->name('former.benefits');
Route::get('/contactus','kisan\FormerController@contactus')->name('former.contactus');
/*  schems*/
Route::get('/govschemes','kisan\FormerController@schemes')->name('former.govschemes');





/*Trader Controllers */
 
Route::get('/trader_reg', 'kisan\TraderController@index')->name('trader.trader_reg');

/* crop price */

Route::get('price_detailes','kisan\CropController@crop_price')->name('former.price_detailes');
Route::get('price_detailes','kisan\CropController@page')->name('former.price_detailes');


Route::group(['middleware' =>['auth','former']],function(){

	Route::get('/farmer',function(){
		return view('former.former_home');
	});

Route::get('/add_farmer','kisan\FormerController@add_former')->name('former.add_farmer');	
Route::get('/farmerdashboard','kisan\FormerController@farmerdashboard')->name('former.former_home');
Route::post('/added_farmer','kisan\FormerController@added_farmer')->name('former.add_home');
/* crop_reg */
Route::get('/crop_reg','kisan\FormerController@crop_reg')->name('former.crop_reg');
Route::post('/add_crop','kisan\FormerController@add_crop')->name('former.add_crop');
/*bookslot */
Route::get('/bookslot','kisan\FormerController@bookslot')->name('former.bookslot');
Route::post('/bookedslot','kisan\FormerController@bookedslot');
/*urgentslot */
Route::get('/urgentslot','kisan\FormerController@urgentslot')->name('former.urgentslot');
Route::post('/addurgentslot','kisan\FormerController@addurgentslot');
/*my registration */
Route::get('/myreg','kisan\FormerController@myreg')->name('former.myreg');
Route::get('/myregget','kisan\FormerController@myregget')->name('former.myregget');

Route::post('/showmyreg','kisan\FormerController@showmyreg');

Route::get('/edit_farmer/{farmer}','kisan\FormerController@edit')->name('former.edit');
Route::put('/update/{farmer}','kisan\FormerController@update')->name('former.update');

});


Route::group(['middleware' =>['auth','trader']],function(){

	Route::get('/trader',function(){
		return view('trader.trader_home');
	});
Route::get('/trader_dashboard','kisan\TraderController@trader_dashboard')->name('trader.trader_home');

Route::get('/add_trader','kisan\TraderController@add_trader')->name('trader.add_trader');
Route::post('/added_trader','kisan\TraderController@added_trader');

/*edit */
Route::get('/edit_trader/{trader}','kisan\TraderController@edit')->name('trader.edit');
Route::put('/trader/update/{trader}','kisan\TraderController@update')->name('trader.update');
/*work time*/
Route::get('/worktime','kisan\TraderController@worktime')->name('trader.worktime');
Route::post('/addworktime','kisan\TraderController@addworktime');

/*trader slot */
Route::get('traderslot','kisan\TraderController@traderslot')->name('trader.traderslot');
/* trader slot display*/
Route::post('traderslotdisplay','kisan\TraderController@traderslotdisplay');
/* trader book a farmer page */
Route::get('traderbookfarmer','kisan\TraderController@traderbookfarmer')
->name('trader.traderbookfarmer');
 
 /* book farmer */
Route::post('/bookfarmer','kisan\TraderController@bookfarmer')->name('trader.bookfarmer');

/* my booked slots show trader booked slots */






});


Route::group(['middleware' =>['auth','admin']],function(){

	Route::get('/admin',function(){
		return view('admin.admin_home');
	});

	Route::get('addcrop','kisan\AdminController@addcrop')->name('admin.addcrop');
	Route::get('admin_dashboard','kisan\AdminController@admin_dashboard')->name('admin.dashboard');
	/*add crop */

	Route::post('admin_add_crop','kisan\AdminController@admin_add_crop')->name('admin.admin_add_crop');
	/*farmers details*/
	Route::get('farmers','kisan\AdminController@farmers')->name('admin.farmers');
	/* traders*/
	Route::get('traders','kisan\AdminController@traders')->name('admin.traders');

	/*assign slot*/
	Route::get('/assignslot','kisan\AdminController@assignslot')->name('admin.assignslot');

	/* mill assign*/
Route::post('/millassign','kisan\AdminController@millassign');
/* show assign slots*/
Route::get('/millshow','kisan\AdminController@millshow')->name('admin.millshow');

Route::get('/traderbookingslots','kisan\AdminController@traderbookingslots')
->name('admin.traderbookingslots');





	
	
	



});


































