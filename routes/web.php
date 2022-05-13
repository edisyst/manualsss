<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ChapterController;

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




/***********
 * MANUALS *
 ***********/
Route::resource('/manuals', ManualController::class);
Route::get('manuals/{manual}/duplicate', [ManualController::class, 'duplicate'])
    ->name('manuals.duplicate');

Route::view('/riordina', 'manuals.reorder')->name('manuals.reorder');
Route::view('/riordina-statico', 'manuals.reorder-static')->name('manuals.reorder-static');


Route::get('/prova', function () {
    $first = \App\Models\Manual::make([
        'title'   => "non ha figli",
    ]);
    $first->makeRoot()->save();

    $first = \App\Models\Manual::make([
        'title'   => "padre AAA",
    ]);
    $first->makeRoot()->save();


    $second = \App\Models\Manual::make([
        'title'   => "figlio di AAA",
     ]);
    $second->prependTo($first)->save();

    $third = \App\Models\Manual::make([
        'title'   => "altro figlio di AAA",
     ])->prependTo($first)->save();

    $fourth = \App\Models\Manual::make([
        'title'   => "figlio di figlio di AAA",
    ])->prependTo($second)->save();

});


Route::get('/', function () {
    $manuals = \App\Models\Manual::all();
    return view('manuals.indextree', compact('manuals'));
});


/************
 * CKFINDER *
*************/
Route::any('/ckfinder/connector', [\CKSource\CKFinderBridge\Controller\CKFinderController::class, 'requestAction'])
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', [\CKSource\CKFinderBridge\Controller\CKFinderController::class, 'browserAction'])
    ->name('ckfinder_browser');

Route::any('/ckfinder/examples/{example?}', [\CKSource\CKFinderBridge\Controller\CKFinderController::class, 'examplesAction'])
    ->name('ckfinder_examples');

Route::view('/filemanager/images', 'filemanager.images')->name('images');

//Route::get('/getPlaceholder', function (){
//    echo $_SERVER['REQUEST_METHOD'];
//});


/************
 * CHAPTERS *
 ************/
Route::resource('/chapters', ChapterController::class);
Route::get('getPlaceholder', [ChapterController::class, 'getList'])
    ->name('chapters.getList');

Route::get('/chapters/fromNameToBody/{name}', [ChapterController::class, 'fromNameToBody']);


