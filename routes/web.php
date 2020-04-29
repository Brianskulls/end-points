<?php

use Illuminate\Support\Facades\Route;

// Opportunities
//Route::get('api/v1/opportunities/{account_id}/subscribe', 'OpportunitiesController@index');

Route::get('api/v1/opportunities/{account_id}/subscribe', 'OpportunitiesController@getOpportunities');
Route::post('api/v1/opportunities/{account_id}/subscribe', 'OpportunitiesController@saveOpportunities');
Route::delete('api/v1/opportunities/{account_id}/subscribe', 'OpportunitiesController@deleteOpportunities');

// Ascent
//Route::get('api/v1/opportunities/{account_id}/subscribe/ascent', 'AscentController@index');

Route::get('api/v1/opportunities/{account_id}/subscribe/ascent', 'AscentController@getAscent');
Route::post('api/v1/opportunities/{account_id}/subscribe/ascent', 'AscentController@saveAscent');
Route::delete('api/v1/opportunities/{account_id}/subscribe/ascent', 'AscentController@deleteAscent');
