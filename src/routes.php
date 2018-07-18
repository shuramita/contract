<?php
Route::prefix('contract')
    ->namespace('Shuramita\Contract\Controllers')
    ->group(function () {
        Route::get('/home', 'Controller@home')->name('contract.home');
});