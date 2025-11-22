<?php

use App\Http\Controllers\SmsController;
use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;



Route::controller(SmsController::class)->group(function(){
    Route::get('/sms_form', 'sms_form')->name('sms.form');
    Route::post('/sms-send','sms_send')->name('sms.send');
});



Route::get('/', [WhatsAppController::class, 'index']);
Route::post('whatsapp', [WhatsAppController::class, 'store']);