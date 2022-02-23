<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CharacteristicController;
use App\Http\Controllers\ContactController;

use App\Models\Blog;
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

/* Frontend Part */
Route::get('/', function () {
    $blogs = Blog::latest()->limit(10)->get();
    return view('frontend/index',compact('blogs'));
})->name('top');

Route::get('/exterior', function() {
    return view('frontend/pages/exterior');
})->name('exterior');

Route::get('/flow', function() {
    return view('frontend/pages/flow');
})->name('flow');

Route::get('/garden', function() {
    return view('frontend/pages/garden');
})->name('garden');

Route::get('/gardenlight', function() {
    return view('frontend/pages/gardenlight');
})->name('gardenlight');

Route::get('/reform_loan', function() {
    return view('frontend/pages/reform_loan');
})->name('reform_loan');

Route::get('/reform', function() {
    return view('frontend/pages/reform');
})->name('reform');

Route::get('/res_city', function() {
    return view('frontend/pages/res_city');
})->name('res_city');

Route::get('/company', function() {
    return view('frontend/pages/company');
})->name('company');

Route::get('/company_top', function() {
    return view('frontend/pages/company_top');
})->name('company_top');

Route::get('/company_intro', function() {
    return view('frontend/pages/company_intro');
})->name('company_intro');

Route::get('/environment', function() {
    return view('frontend/pages/environment');
})->name('environment');

Route::get('/organization', function() {
    return view('frontend/pages/organization');
})->name('organization');

Route::get('/contact', function() {
    return view('frontend/pages/contact');
})->name('contact');

Route::get('/employment', function() {
    return view('frontend/pages/employment');
})->name('employment');

Route::get('/rule', function() {
    return view('frontend/pages/rule');
})->name('rule');

Route::get('/staff', function() {
    return view('frontend/pages/staff');
})->name('staff');

Route::get('/noticelist', function() {
    return view('frontend/pages/noticelist');
})->name('noticelist');

Route::get('/example', function() {
    return view('frontend/pages/construction');
})->name('example');

Route::get('/example_detail', function() {
    return view('frontend/pages/construction_detail');
})->name('example_detail');

Route::get('/wooddeck', function() {
    return view('frontend/pages/wooddeck');
})->name('wooddeck');

Route::get('/remodeling', function() {
    return view('frontend/pages/remodeling');
})->name('remodeling');

Route::get('/doggarden', function() {
    return view('frontend/pages/doggarden');
})->name('doggarden');

Route::get('/fence', function() {
    return view('frontend/pages/fence');
})->name('fence');

Route::get('/lifestyle', function() {
    return view('frontend/pages/lifestyle');
})->name('lifestyle');

Route::get('/parking', function() {
    return view('frontend/pages/parking');
})->name('parking');

/* End Frontend Part */
Route::post('contact/send', [ContactController::class, 'sendMail'])->name('contact.sendMail');

Route::get('blog/list', [BlogController::class, 'getList'])->name('blog.list');
Route::get('blog/detail/{id}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('construction/detail/{id}', [ConstructionController::class, 'detail'])->name('construction.detail');
Route::get('construction/list', [ConstructionController::class, 'getList'])->name('construction.list');

Route::get('gallery/list', [GalleryController::class, 'getList'])->name('gallery.list');
Route::get('gallery/detail/{id}', [GalleryController::class, 'detail'])->name('gallery.detail');
Route::get('sudou-admin', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', function() {
        return redirect()->route('blog.index');
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('designer', DesignerController::class);
    Route::resource('construction', ConstructionController::class);
    Route::post('gallery/dropzoneMedia', [GalleryController::class, 'dropzoneMedia'])->name('gallery.media');
    Route::resource('gallery', GalleryController::class);
    Route::resource('characteristic', CharacteristicController::class);
});
