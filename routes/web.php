<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhishingController;
Route::get('/', function () {
    return view('home');
});
Route::get('/phishing', [PhishingController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/phishing', [PhishingController::class, 'index'])->name('phishing.index');
Route::get('/phishing/{category}', [PhishingController::class, 'create'])->name('phishing.create');
Route::post('/phishing/store', [PhishingController::class, 'store'])->name('phishing.store');
Route::delete('/phishing/{id}', [PhishingController::class, 'destroy'])->name('phishing.destroy');
Route::get('/link', function () {
    return view('phishing.link');
})->name('link');  // <- this is the key
Route::get('/success', function () {
    return view('success');
})->name('success');  // <- this is the key



