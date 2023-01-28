<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->group(


//Route::middleware(["my-cors"])->group(function() {
	
	// nairaland home
	Route::get("/home", "NairalandController@index");


	// category
	Route::post("/category/", "NairalandController@category");

		// topic
	Route::post("/topic", "NairalandController@topic");
	
	Route::get("/section", "NairalandController@section");
	
	
	Route::get("/to", "NairalandController@a");
	
	
	
//});