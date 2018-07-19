<?php

Route::group(['prefix' => 'docs'], function () {
    Route::get('/', '\Infrontlabs\Startup\Controllers\DocumentationController@index')->name('docs.index');
    Route::get('/{page}', '\Infrontlabs\Startup\Controllers\DocumentationController@index')->name('docs.page');
});

/* STRIPE WEBHOOKS */
Route::post(
    'stripe/webhook',
    '\Infrontlabs\Startup\Controllers\Account\StripeWebhookController@handleWebhook'
);

Route::middleware(['web', 'auth', 'tenent', 'bindings'])
    ->namespace('Infrontlabs\Startup\Controllers')
    ->group(__DIR__ . '/account.php');
