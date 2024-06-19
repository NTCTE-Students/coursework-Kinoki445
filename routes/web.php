<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\WebhookController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/telegram/webhook', [TelegramController::class, 'handle']);

