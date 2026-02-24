<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v1-enums',
    'data' => [
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Factory.php' => [
            0 => '93a2b7d7d4922713644d68848747fc94c0a97f249178475235550edc5a3fd2bd',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\contracts\\factory',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\contracts\\driver',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php' => [
            0 => 'f779640c4ac830acbcc74b82d5f99ef040afd96272892238b66154a0e81ff5da',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\contracts\\provider',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\contracts\\getauthorizationurl',
                1 => 'codebarag\\microsoftentrasso\\contracts\\exchangecodefortokens',
                2 => 'codebarag\\microsoftentrasso\\contracts\\getuserfromtoken',
                3 => 'codebarag\\microsoftentrasso\\contracts\\refreshaccesstoken',
                4 => 'codebarag\\microsoftentrasso\\contracts\\stateless',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php' => [
            0 => '2e680d2fceba64113b1d031e7e9d95f570a2211c51ac03b5eba500d240e27b57',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\contracts\\ssoauthenticatable',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\contracts\\microsoftidentity',
                1 => 'codebarag\\microsoftentrasso\\contracts\\findbymicrosoftid',
                2 => 'codebarag\\microsoftentrasso\\contracts\\findorcreatefrommicrosoft',
                3 => 'codebarag\\microsoftentrasso\\contracts\\linkmicrosoftaccount',
                4 => 'codebarag\\microsoftentrasso\\contracts\\hasmicrosoftssolinked',
                5 => 'codebarag\\microsoftentrasso\\contracts\\ismicrosofttokenexpired',
                6 => 'codebarag\\microsoftentrasso\\contracts\\updatemicrosofttokens',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php' => [
            0 => '87f88e2355bb8361d4ccc9515d94ee0670cd52e55eb8e9ce129cb2d679b45e8a',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\events\\ssouserauthenticated',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\events\\__construct',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php' => [
            0 => '2f8a2d6639a991047856eb7ee11f97e6180c110dc9fb9a485ee10d30783a33f3',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\events\\ssouserregistered',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\events\\__construct',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php' => [
            0 => 'd5d032cd2f4683b049e1ca1594dda6b353c789efbbdf09dc13938f90c96d1db7',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\exceptions\\invalidstateexception',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\exceptions\\make',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php' => [
            0 => 'f5b79819e4f25ba05fe6c34a4ee09b9d8430df156e947087180f76d7de23dc99',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\exceptions\\ssoexception',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\exceptions\\configurationmissing',
                1 => 'codebarag\\microsoftentrasso\\exceptions\\guardnotconfigured',
                2 => 'codebarag\\microsoftentrasso\\exceptions\\guardmismatch',
                3 => 'codebarag\\microsoftentrasso\\exceptions\\guardmodelnotconfigured',
                4 => 'codebarag\\microsoftentrasso\\exceptions\\modelclassnotfound',
                5 => 'codebarag\\microsoftentrasso\\exceptions\\modelmissingtrait',
                6 => 'codebarag\\microsoftentrasso\\exceptions\\usernotfound',
                7 => 'codebarag\\microsoftentrasso\\exceptions\\stateexpired',
                8 => 'codebarag\\microsoftentrasso\\exceptions\\invalidredirecturi',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php' => [
            0 => 'd488c298b1571270988aabcbe39dc9acccb8e157cd3ffbac74e2485184013a20',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\exceptions\\tokenexchangeexception',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\exceptions\\failed',
                1 => 'codebarag\\microsoftentrasso\\exceptions\\missingauthorizationcode',
                2 => 'codebarag\\microsoftentrasso\\exceptions\\missingcodeverifier',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Facades/MicrosoftEntraSSO.php' => [
            0 => '3f13964021aefaa72fbb247ab9716b440ae62c95f8e912a18015e19bf56869e5',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\facades\\microsoftentrasso',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\facades\\getfacadeaccessor',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php' => [
            0 => 'ee1fa308b1876a0b0783c235a73c52658e91781833d61f32930bb45dae304e52',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\http\\controllers\\concerns\\handlesmicrosoftsso',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\http\\controllers\\concerns\\validateguard',
                1 => 'codebarag\\microsoftentrasso\\http\\controllers\\concerns\\validatestate',
                2 => 'codebarag\\microsoftentrasso\\http\\controllers\\concerns\\getcallbackurl',
                3 => 'codebarag\\microsoftentrasso\\http\\controllers\\concerns\\redirecttologinwitherror',
                4 => 'codebarag\\microsoftentrasso\\http\\controllers\\concerns\\resolveuser',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php' => [
            0 => '07095c0f3e8ef84f05594e0d2deafda5ad646388607915d189c6381d5824eb85',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\http\\controllers\\handlemicrosoftcallbackcontroller',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\http\\controllers\\__construct',
                1 => 'codebarag\\microsoftentrasso\\http\\controllers\\__invoke',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php' => [
            0 => '7ecfa4e492c887c4c5ad755b0a55f2470237ae95a69943a5488d58ae1a743990',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\http\\controllers\\redirecttomicrosoftcontroller',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\http\\controllers\\__construct',
                1 => 'codebarag\\microsoftentrasso\\http\\controllers\\__invoke',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php' => [
            0 => '9e9a85709f499856dec443e5681b01ecef3f5ae3a73499e421d8a463237e8260',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\microsoftentrassomanager',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\__construct',
                1 => 'codebarag\\microsoftentrasso\\driver',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php' => [
            0 => '97a1c6a725a98c6fb09d6ccf031d1930a63a6563efbb048114653d68377340e6',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\microsoftentrassoserviceprovider',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\register',
                1 => 'codebarag\\microsoftentrasso\\boot',
                2 => 'codebarag\\microsoftentrasso\\registerroutes',
                3 => 'codebarag\\microsoftentrasso\\registermigrations',
                4 => 'codebarag\\microsoftentrasso\\registerviews',
                5 => 'codebarag\\microsoftentrasso\\registerpublishables',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Middleware/EnsureSSOEnabled.php' => [
            0 => '38501c0d3f9741ec35663e78cb13a2e324331d94b3a443c979b5694b3dc63bdd',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\middleware\\ensuressoenabled',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\middleware\\handle',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php' => [
            0 => '15ba0773b55550d8929a4e3b4a3ee9a9e6278d1b8a2d098d5669ee1f9aa8364c',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\models\\microsoftssoidentity',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\models\\casts',
                1 => 'codebarag\\microsoftentrasso\\models\\authenticatable',
                2 => 'codebarag\\microsoftentrasso\\models\\istokenexpired',
                3 => 'codebarag\\microsoftentrasso\\models\\scopebymicrosoftid',
                4 => 'codebarag\\microsoftentrasso\\models\\scopeforauthenticatable',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php' => [
            0 => 'ef8aeab73045d479ee3fecc27f054029928f4d50920935d4f88d4f2c0f13fd33',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\services\\guardconfigvalidator',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\services\\guardconfig',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php' => [
            0 => 'c5e16e1d3c659cf820f2e809e93b5dae47ce59c7b6cb2966ff7333b787f00333',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\services\\microsoftgraphservice',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\services\\__construct',
                1 => 'codebarag\\microsoftentrasso\\services\\getuserprofile',
                2 => 'codebarag\\microsoftentrasso\\services\\getusergroups',
                3 => 'codebarag\\microsoftentrasso\\services\\getuserphotodatauri',
                4 => 'codebarag\\microsoftentrasso\\services\\isuseringroup',
                5 => 'codebarag\\microsoftentrasso\\services\\resolvegroupmembership',
                6 => 'codebarag\\microsoftentrasso\\services\\authenticatedrequest',
                7 => 'codebarag\\microsoftentrasso\\services\\refreshtoken',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php' => [
            0 => 'd1c6e0d410100eb8bac7edac90dab2e32c560ab955ad55cb1b5ecd5567da4c69',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\services\\microsoftoauthservice',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\services\\__construct',
                1 => 'codebarag\\microsoftentrasso\\services\\stateless',
                2 => 'codebarag\\microsoftentrasso\\services\\generatestate',
                3 => 'codebarag\\microsoftentrasso\\services\\generatecodeverifier',
                4 => 'codebarag\\microsoftentrasso\\services\\generatecodechallenge',
                5 => 'codebarag\\microsoftentrasso\\services\\getauthorizationurl',
                6 => 'codebarag\\microsoftentrasso\\services\\exchangecodefortokens',
                7 => 'codebarag\\microsoftentrasso\\services\\getuserfromtoken',
                8 => 'codebarag\\microsoftentrasso\\services\\refreshaccesstoken',
                9 => 'codebarag\\microsoftentrasso\\services\\getredirecturi',
                10 => 'codebarag\\microsoftentrasso\\services\\setredirecturi',
                11 => 'codebarag\\microsoftentrasso\\services\\validateconfiguration',
                12 => 'codebarag\\microsoftentrasso\\services\\validateredirecturi',
                13 => 'codebarag\\microsoftentrasso\\services\\httpclient',
            ],
            3 => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php' => [
            0 => 'fa5320b5f6e081c3c2ea59312c453062a3197c569b7cf6696c048440c5383a6f',
            1 => [
                0 => 'codebarag\\microsoftentrasso\\traits\\hasmicrosoftsso',
            ],
            2 => [
                0 => 'codebarag\\microsoftentrasso\\traits\\microsoftidentity',
                1 => 'codebarag\\microsoftentrasso\\traits\\findbymicrosoftid',
                2 => 'codebarag\\microsoftentrasso\\traits\\findorcreatefrommicrosoft',
                3 => 'codebarag\\microsoftentrasso\\traits\\linkmicrosoftaccount',
                4 => 'codebarag\\microsoftentrasso\\traits\\updatemicrosofttokens',
                5 => 'codebarag\\microsoftentrasso\\traits\\hasmicrosoftssolinked',
                6 => 'codebarag\\microsoftentrasso\\traits\\ismicrosofttokenexpired',
                7 => 'codebarag\\microsoftentrasso\\traits\\unlinkmicrosoftaccount',
            ],
            3 => [
            ],
        ],
    ],
]);
