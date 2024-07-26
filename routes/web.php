<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ChapterController;
use App\Models\Manual;

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
Route::get('manuals/{manual}/duplicate', [ManualController::class, 'duplicate'])->name('manuals.duplicate');

//Route::view('/riordina', 'manuals.reorder', ['manuals' => Manual::where('parent_id', NULL)->get()])->name('manuals.reorder');
Route::get('/riordina', [ManualController::class, 'reorder'])->name('manuals.reorder');
Route::post('manuals/reorder', [ManualController::class, 'updateOrder'])->name('manuals.updateOrder');

Route::view('/riordina-statico', 'manuals.reorder-static')->name('manuals.reorder-static');


Route::get('/prova', function () {
    $first = \App\Models\Manual::make([
        'title'   => "NONNO ISIDORO",
    ]);
    $first->makeRoot()->save();

    $second = \App\Models\Manual::make([
        'title'   => "PADRE SALVATORE",
     ]);
    $second->prependTo($first)->save();

    $third = \App\Models\Manual::make([
        'title'   => "ZIO GIANNI",
     ]);
    $third->prependTo($first)->save();

    $fourth = \App\Models\Manual::make([
        'title'   => "CUGINO NICOLA",
    ]);
    $fourth->prependTo($third)->save();

    $fourth = \App\Models\Manual::make([
        'title'   => "FIGLIO",
    ]);
    $fourth->prependTo($second)->save();

    $five = \App\Models\Manual::make([
        'title'   => "NIPOTE EDOARDO",
    ]);
    $five->prependTo($fourth)->save();

    $six = \App\Models\Manual::make([
        'title'   => "figlio di NIPOTE EDOARDO",
    ]);
    $six->prependTo($five)->save();

    $seven = \App\Models\Manual::make([
        'title'   => "NIPOTE di NIPOTE EDOARDO",
    ]);
    $seven->prependTo($six)->save();

    $eight = \App\Models\Manual::make([
        'title'   => "NIPOTE di NIPOTE EDOARDO",
    ]);
    $eight->prependTo($seven)->save();


    $first = \App\Models\Manual::make([
        'title'   => "NONNO secondo",
    ]);
    $first->makeRoot()->save();
})->name('prova');


Route::get('/', function () {
    $manuals = \App\Models\Manual::where('parent_id', null)->get();
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


