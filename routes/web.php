<?php

use CodebarAg\MicrosoftEntraSSO\Http\Controllers\HandleMicrosoftCallbackController;
use CodebarAg\MicrosoftEntraSSO\Http\Controllers\RedirectToMicrosoftController;
use CodebarAg\MicrosoftEntraSSO\Middleware\EnsureSSOEnabled;
use Illuminate\Support\Facades\Route;

Route::middleware(array_merge(
    config('microsoft-entra-sso.route_middleware', ['web']),
    [EnsureSSOEnabled::class],
))
    ->prefix(config('microsoft-entra-sso.route_prefix', 'sso/microsoft'))
    ->group(function () {
        Route::get('{guard}/redirect', RedirectToMicrosoftController::class)
            ->name('microsoft-entra-sso.redirect')
            ->where('guard', '[A-Za-z0-9_]+');

        Route::get('{guard}/callback', HandleMicrosoftCallbackController::class)
            ->name('microsoft-entra-sso.callback')
            ->where('guard', '[A-Za-z0-9_]+');
    });
