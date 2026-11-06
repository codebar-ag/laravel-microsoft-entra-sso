<?php

declare(strict_types=1);

use CodebarAg\MicrosoftEntraSSO\Http\Controllers\HandleMicrosoftCallbackController;
use CodebarAg\MicrosoftEntraSSO\Http\Controllers\RedirectToMicrosoftController;
use Illuminate\Support\Facades\Route;

// Loaded by EntraSsoServiceProvider inside the configured prefix and middleware group.
Route::get('{guard}/redirect', RedirectToMicrosoftController::class)
    ->name('microsoft-entra-sso.redirect')
    ->where('guard', '[A-Za-z0-9_]+');

Route::get('{guard}/callback', HandleMicrosoftCallbackController::class)
    ->name('microsoft-entra-sso.callback')
    ->where('guard', '[A-Za-z0-9_]+');
