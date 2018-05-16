<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/hotels/search', 'HotelController@data');
 Route::get('/hotels/search/name={name?}&{sort?}sorting', "HotelController@SearchName");
 Route::get('/hotels/search/minprice={price?}&maxprice={price2?}&{name?}sorting',"HotelController@SearchPrice");
 Route::get('/hotels/search/city={city?}&{name?}sorting', "HotelController@SearchCity");
 Route::get('/hotels/search/datefrom={date1?}&dateto={date2?}&{name?}sorting', "HotelController@SearchDate");
 
