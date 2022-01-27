<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::prefix('webxpay')->group(function () {
        Route::get('/success', function(){
            return "Payment Succeed";
        } )->name('webxpay.success');
    });
});
