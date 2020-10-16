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
//Route::get('/example', array('as' => 'admin.index', function(){
//    $url = route('admin.index');
//    return "URL: $url";
//}));

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/pages', [PagesController::class, 'index']);

Route::resource('/pages', PagesController::class);


//Route::get('/pages/{id}/{name?}', function ($id, $name=null){
//    return "Page $id" . ($name ? ", $name" : '');
//})->name('page');







