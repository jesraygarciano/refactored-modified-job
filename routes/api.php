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

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');

    // user
    Route::group(['prefix' => 'userInfo'], function(){
        // fetch'
        Route::group(['prefix' => 'fetch'], function(){
            Route::get('user', 'UserController@fetch_user');
            Route::get('programmingLanguages', 'UserController@fetch_programming_languages');
            Route::get('userTechnologies', 'UserController@fetch_technologies');
            Route::get('workExperiences', 'UserController@fetch_work_experience');
            Route::get('educationalBackgrounds', 'UserController@fetch_educational_background');
            Route::get('followedCompanies', 'UserController@fetch_followed_companies');
            Route::get('userAddresses', 'UserController@fetch_user_addresses');
        });
        // update
        Route::group(['prefix' => 'update'], function(){
            Route::post('skills', 'UserController@update_skills');
            Route::post('user_description', 'UserController@update_description');
            Route::post('basic_info', 'UserController@update_basic_info');
        });
        // add
        Route::group(['prefix' => 'add'], function(){
            Route::post('work_experience', 'UserController@add_work_experience');
            Route::post('education_background', 'UserController@add_education_background');
            Route::post('address', 'UserController@add_address');
        });
        // delete
        Route::group(['prefix' => 'delete'],function(){
            Route::delete('work_experience', 'UserController@delete_work_experience');
            Route::delete('education_background', 'UserController@delete_education_background');
        });
        
    });

    // company
    Route::group(['prefix' => "company"], function(){
        Route::post('create', 'CompanyController@create');
        Route::get('fetch', 'CompanyController@fetch');
        Route::get('fetch/openings', 'CompanyController@fetch_openings');
        Route::get('datatable', 'CompanyController@fetch_datatable');
    });

    // opening
    Route::group([ "prefix" => "opening" ], function(){
        // fetch
        Route::get('fetch', 'OpeningController@fetch');

        Route::group(["prefix" => "validate"],function(){
            Route::post('basicInfo', 'OpeningController@validateBasicInfo');
            Route::post('description', 'OpeningController@validateDescription');
        });
        
        Route::post('create', 'OpeningController@create');
    });
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
});
