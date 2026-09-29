<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Private identity review for the client. Kept out of search engines and AI
// crawlers by this header plus the robots meta tags in the view. Deliberately
// not listed in robots.txt, which would only advertise the path.
Route::get('/brand-review', fn () => response()
    ->view('brand-review')
    ->header('X-Robots-Tag', 'noindex, nofollow, noarchive, nosnippet, noimageindex'))
    ->name('brand-review');
