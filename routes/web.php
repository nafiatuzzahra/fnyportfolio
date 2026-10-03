<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/', 'beranda')->name('beranda');
Route::redirect('/beranda', '/');

Route::view('/data-diri', 'data-diri')->name('data-diri');
Route::view('/aktivitas', 'aktivitas')->name('aktivitas');
Route::view('/kontak', 'kontak')->name('kontak');

Route::get('/language/{locale}', function (Request $request, string $locale) {
    abort_unless(in_array($locale, ['id', 'en'], true), 404);

    $request->session()->put('locale', $locale);

    $page = $request->query('page');
    $allowedPages = ['beranda', 'data-diri', 'aktivitas', 'kontak'];

    return redirect()->route(in_array($page, $allowedPages, true) ? $page : 'beranda');
})->name('language.switch');
