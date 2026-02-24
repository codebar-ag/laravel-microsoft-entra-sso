<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Microsoft Entra ID (Azure AD) Credentials
    |--------------------------------------------------------------------------
    |
    | Register an application in the Azure Portal / Entra admin center and
    | copy the tenant ID, client (application) ID, and client secret here.
    | The redirect URI must match the one configured in Azure exactly.
    |
    */

    'tenant_id' => env('MICROSOFT_ENTRA_SSO_TENANT_ID'),

    'client_id' => env('MICROSOFT_ENTRA_SSO_CLIENT_ID'),

    'client_secret' => env('MICROSOFT_ENTRA_SSO_CLIENT_SECRET'),

    'redirect_uri' => env('MICROSOFT_ENTRA_SSO_REDIRECT_URI'),

    /*
    |--------------------------------------------------------------------------
    | OAuth Scopes
    |--------------------------------------------------------------------------
    |
    | The scopes requested during the OAuth2 authorization flow. The defaults
    | are sufficient for SSO login. Add additional Microsoft Graph scopes
    | if your application needs to access Microsoft APIs on behalf of the user.
    |
    */

    'scopes' => ['openid', 'profile', 'email', 'User.Read', 'GroupMember.Read.All'],

    /*
    |--------------------------------------------------------------------------
    | Auto-Registration
    |--------------------------------------------------------------------------
    |
    | When enabled, users authenticating via Microsoft SSO for the first time
    | will be automatically created in your database. Disable this if you
    | only want to allow SSO for pre-existing users.
    |
    */

    'auto_register' => true,

    /*
    |--------------------------------------------------------------------------
    | Route Configuration
    |--------------------------------------------------------------------------
    |
    | Customize the route prefix and middleware applied to the SSO routes.
    | The routes register as: {prefix}/{guard}/redirect and {prefix}/{guard}/callback
    |
    */

    'route_prefix' => 'sso/microsoft',

    'route_middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Guards
    |--------------------------------------------------------------------------
    |
    | Define which authentication guards can use Microsoft SSO. Each guard
    | maps to an Eloquent model and a post-login redirect path. The model
    | must use the HasMicrosoftSSO trait.
    |
    */

    'guards' => [
        'web' => [
            'model' => \App\Models\User::class,
            'redirect_after_login' => '/dashboard',
        ],
    ],

];
