<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {


    return view('mirror', [
   		'greetings' => config('mirror.greetings'),
   		'city' => env('CITY'),
   		'state' => env('STATE'),
   		'woeid' => env('WOEID')
    ]);
});

$app->get('/admin', function () use ($app) {

    return view('admin', ['test'=>'testing']);
});

$app->get('/info', function () use ($app) {

    return view('info');
});

$app->get('/version', function() use ($app) {
	$hash = trim(`git rev-parse HEAD`); 

	return [
		'version' => $hash,
	]; 
});