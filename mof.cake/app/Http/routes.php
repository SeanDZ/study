<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
/*******Home********/
    Route::get('/','Home\IndexController@index');
    Route::get('home/mof/index','Home\MofController@index');
    Route::get('home/mof/work','Home\WorkController@work');
    Route::get('home/mof/design','Home\DesignController@design');

    Route::any('admin/login', 'Admin\LoginController@login');
    Route::get('admin/code', 'Admin\LoginController@code');
    Route::get('admin/crypt', 'Admin\LoginController@crypt');
});
/*******Admin*******/
Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('quit', 'LoginController@quit');
    Route::any('pass', 'IndexController@pass');

//    Route::any('footer/{footer_id}','FooterController@destroy');
//    Route::get('middle/{middle_id}','MiddleController@destroy'); ,['except' => ['destroy']]
    Route::resource('category', 'CategoryController');
    Route::resource('footer', 'FooterController');
    Route::resource('middle', 'MiddleController');
    Route::resource('mof/image', 'ImageController');
    Route::resource('mof/technology','TechnologyController');
    Route::resource('mof/twelve', 'TwelveController');
    Route::resource('mof_work/work','WorkController');
    Route::resource('mof_work/category','CategoryController');
    Route::resource('mof_work/catename','CatenameController');
    Route::resource('mof_design/design','DesignController');
    Route::resource('mof_design/des','DesController');
    Route::resource('mof_tech/tech','TechController');
    Route::resource('bcake/course','CourseController');
    Route::resource('bcake/school','SchoolController');
    Route::resource('bcake_major/major','MajorController');
    Route::resource('bcake_major/pro','ProController');
    Route::resource('bcake_major/profession','ProfessionController');

//CommonController
    Route::any('upload','CommonController@upload');
});