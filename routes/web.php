<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/',[App\Http\Controllers\TemplateController::class , 'index']);
Route::get('/index',[App\Http\Controllers\TemplateController::class , 'index']);
Route::get('/index/{name}',[App\Http\Controllers\TemplateController::class , 'name']);
Route::get('/about',[App\Http\Controllers\TemplateController::class , 'about']);
Route::get('/services',[App\Http\Controllers\TemplateController::class , 'services']);
Route::get('/pricing',[App\Http\Controllers\TemplateController::class , 'pricing']);
Route::get('/blog',[App\Http\Controllers\TemplateController::class , 'blog']);
Route::get('/blog-single',[App\Http\Controllers\TemplateController::class , 'blog_single']);
Route::get('/contact',[App\Http\Controllers\TemplateController::class , 'contact']);
Route::get('/team',[App\Http\Controllers\TemplateController::class , 'team']);
Route::get('/portfolio',[App\Http\Controllers\TemplateController::class , 'portfolio']);
Route::get('/portfolio-details',[App\Http\Controllers\TemplateController::class , 'portfolio_details']);
Route::get('/review/{search}',[App\Http\Controllers\TemplateController::class , 'review'])->name('review');
Route::get('/property/{id}',[App\Http\Controllers\TemplateController::class , 'property'])->name('property');
Route::post('/review',[App\Http\Controllers\TemplateController::class , 'review_post']);

Route::get('/review-details',[App\Http\Controllers\TemplateController::class , 'review_details']);

Route::post('/review-details',[App\Http\Controllers\TemplateController::class , 'postRev']);
Route::post('/index',[App\Http\Controllers\TemplateController::class , 'store']);


Route::get('/ajax',[App\Http\Controllers\TemplateController::class , 'ajax']);
Route::get('/write',[App\Http\Controllers\TemplateController::class , 'write']);




Route::get('/123',function(){
    if(Request::ajax()){
        return 'getRequest has loaded completely.';
    }
});


Route::post('/register', function(Request $request){
    // if(Request::ajax()){
    //     return var_dump(Response::json(Request::all()));
    // }

    $hash = $request->hash;

});






