<?php
Route::prefix('contract')
    ->namespace('Shuramita\Contract\Controllers')
    ->group(function () {
        Route::get('/', 'Controller@home')->name('contract.home');
        // prepare contract , visit this link to see contract form
        Route::get('/form', 'ContractController@form')->name('contract.form');
        // preview contract

        // Generate and send contract

});