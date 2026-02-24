<?php

declare(strict_types=1);

return [
    'lastFullAnalysisTime' => 1771948281,
    'meta' => [
        'cacheVersion' => 'v12-linesToIgnore',
        'phpstanVersion' => '2.1.40',
        'fnsr' => false,
        'metaExtensions' => [
        ],
        'phpVersion' => 80418,
        'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, paths: [/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src, /Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests], level: 9, tmpDir: /Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/var/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
        'analysedPaths' => [
            0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src',
            1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests',
        ],
        'scannedFiles' => [
        ],
        'composerLocks' => [
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/composer.lock' => '33e36d189af7698902504b6b45e02ea4165c6079e2839a3aafa8a1353d50bdbd',
        ],
        'composerInstalled' => [
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/installed.php' => [
                'versions' => [
                    'brianium/paratest' => [
                        'pretty_version' => 'v7.19.0',
                        'version' => '7.19.0.0',
                        'reference' => '7c6c29af7c4b406b49ce0c6b0a3a81d3684474e6',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../brianium/paratest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'brick/math' => [
                        'pretty_version' => '0.14.8',
                        'version' => '0.14.8.0',
                        'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../brick/math',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'carbonphp/carbon-doctrine-types' => [
                        'pretty_version' => '3.2.0',
                        'version' => '3.2.0.0',
                        'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../carbonphp/carbon-doctrine-types',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'composer/semver' => [
                        'pretty_version' => '3.4.4',
                        'version' => '3.4.4.0',
                        'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/./semver',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'cordoval/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'davedevelopment/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'dflydev/dot-access-data' => [
                        'pretty_version' => 'v3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../dflydev/dot-access-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/deprecations' => [
                        'pretty_version' => '1.1.6',
                        'version' => '1.1.6.0',
                        'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../doctrine/deprecations',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'doctrine/inflector' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../doctrine/inflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/lexer' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../doctrine/lexer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dragonmantank/cron-expression' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../dragonmantank/cron-expression',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'egulias/email-validator' => [
                        'pretty_version' => '4.0.4',
                        'version' => '4.0.4.0',
                        'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../egulias/email-validator',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fakerphp/faker' => [
                        'pretty_version' => 'v1.24.1',
                        'version' => '1.24.1.0',
                        'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../fakerphp/faker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fidry/cpu-core-counter' => [
                        'pretty_version' => '1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../fidry/cpu-core-counter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'filp/whoops' => [
                        'pretty_version' => '2.18.4',
                        'version' => '2.18.4.0',
                        'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../filp/whoops',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fruitcake/php-cors' => [
                        'pretty_version' => 'v1.4.0',
                        'version' => '1.4.0.0',
                        'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../fruitcake/php-cors',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'graham-campbell/result-type' => [
                        'pretty_version' => 'v1.1.4',
                        'version' => '1.1.4.0',
                        'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../graham-campbell/result-type',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/guzzle' => [
                        'pretty_version' => '7.10.0',
                        'version' => '7.10.0.0',
                        'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../guzzlehttp/guzzle',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/promises' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../guzzlehttp/promises',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/psr7' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '21dc724a0583619cd1652f673303492272778051',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../guzzlehttp/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/uri-template' => [
                        'pretty_version' => 'v1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../guzzlehttp/uri-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'hamcrest/hamcrest-php' => [
                        'pretty_version' => 'v2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../hamcrest/hamcrest-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'iamcal/sql-parser' => [
                        'pretty_version' => 'v0.7',
                        'version' => '0.7.0.0',
                        'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../iamcal/sql-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'illuminate/auth' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/broadcasting' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/bus' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/cache' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/collections' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/concurrency' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/conditionable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/config' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/console' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/container' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/contracts' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/cookie' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/database' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/encryption' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/events' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/filesystem' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/hashing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/http' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/json-schema' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/log' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/macroable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/mail' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/notifications' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/pagination' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/pipeline' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/process' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/queue' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/redis' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/reflection' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/routing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/session' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/support' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/testing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/translation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/validation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'illuminate/view' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.53.0',
                        ],
                    ],
                    'jean85/pretty-package-versions' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../jean85/pretty-package-versions',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'kodova/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'larastan/larastan' => [
                        'pretty_version' => 'v3.9.2',
                        'version' => '3.9.2.0',
                        'reference' => '2e9ed291bdc1969e7f270fb33c9cdf3c912daeb2',
                        'type' => 'phpstan-extension',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../larastan/larastan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/framework' => [
                        'pretty_version' => 'v12.53.0',
                        'version' => '12.53.0.0',
                        'reference' => 'f57f035c0d34503d9ff30be76159bb35a003cd1f',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/pail' => [
                        'pretty_version' => 'v1.2.6',
                        'version' => '1.2.6.0',
                        'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/pail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/pint' => [
                        'pretty_version' => 'v1.27.1',
                        'version' => '1.27.1.0',
                        'reference' => '54cca2de13790570c7b6f0f94f37896bee4abcb5',
                        'type' => 'project',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/pint',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/prompts' => [
                        'pretty_version' => 'v0.3.13',
                        'version' => '0.3.13.0',
                        'reference' => 'ed8c466571b37e977532fb2fd3c272c784d7050d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/prompts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/serializable-closure' => [
                        'pretty_version' => 'v2.0.10',
                        'version' => '2.0.10.0',
                        'reference' => '870fc81d2f879903dfc5b60bf8a0f94a1609e669',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/serializable-closure',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/tinker' => [
                        'pretty_version' => 'v2.11.1',
                        'version' => '2.11.1.0',
                        'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/tinker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'league/commonmark' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/commonmark',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/config' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/config',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem' => [
                        'pretty_version' => '3.31.0',
                        'version' => '3.31.0.0',
                        'reference' => '1717e0b3642b0df65ecb0cc89cdd99fa840672ff',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/flysystem',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem-local' => [
                        'pretty_version' => '3.31.0',
                        'version' => '3.31.0.0',
                        'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/flysystem-local',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/mime-type-detection' => [
                        'pretty_version' => '1.16.0',
                        'version' => '1.16.0.0',
                        'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/mime-type-detection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri' => [
                        'pretty_version' => '7.8.0',
                        'version' => '7.8.0.0',
                        'reference' => '4436c6ec8d458e4244448b069cc572d088230b76',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/uri',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri-interfaces' => [
                        'pretty_version' => '7.8.0',
                        'version' => '7.8.0.0',
                        'reference' => 'c5c5cd056110fc8afaba29fa6b72a43ced42acd4',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../league/uri-interfaces',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mockery/mockery' => [
                        'pretty_version' => '1.6.12',
                        'version' => '1.6.12.0',
                        'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../mockery/mockery',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'monolog/monolog' => [
                        'pretty_version' => '3.10.0',
                        'version' => '3.10.0.0',
                        'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../monolog/monolog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mtdowling/cron-expression' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '^1.0',
                        ],
                    ],
                    'myclabs/deep-copy' => [
                        'pretty_version' => '1.13.4',
                        'version' => '1.13.4.0',
                        'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../myclabs/deep-copy',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nesbot/carbon' => [
                        'pretty_version' => '3.11.1',
                        'version' => '3.11.1.0',
                        'reference' => 'f438fcc98f92babee98381d399c65336f3a3827f',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/schema' => [
                        'pretty_version' => 'v1.3.5',
                        'version' => '1.3.5.0',
                        'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nette/schema',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/utils' => [
                        'pretty_version' => 'v4.1.3',
                        'version' => '4.1.3.0',
                        'reference' => 'bb3ea637e3d131d72acc033cfc2746ee893349fe',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nette/utils',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nikic/php-parser' => [
                        'pretty_version' => 'v5.7.0',
                        'version' => '5.7.0.0',
                        'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nikic/php-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/collision' => [
                        'pretty_version' => 'v8.9.1',
                        'version' => '8.9.1.0',
                        'reference' => 'a1ed3fa530fd60bc515f9303e8520fcb7d4bd935',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nunomaduro/collision',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/termwind' => [
                        'pretty_version' => 'v2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nunomaduro/termwind',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'orchestra/canvas' => [
                        'pretty_version' => 'v10.1.1',
                        'version' => '10.1.1.0',
                        'reference' => '6e63f56acd46b0ee842e922d0ebb18af8f7a60f6',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/canvas',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'orchestra/canvas-core' => [
                        'pretty_version' => 'v10.1.2',
                        'version' => '10.1.2.0',
                        'reference' => 'af1ac73bb0e4f5a65eeb3aadc1030983c6ea0aea',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/canvas-core',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'orchestra/sidekick' => [
                        'pretty_version' => 'v1.2.20',
                        'version' => '1.2.20.0',
                        'reference' => '267a71b56cb2fe1a634d69fc99889c671b77ff43',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/sidekick',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'orchestra/testbench' => [
                        'pretty_version' => 'v10.9.0',
                        'version' => '10.9.0.0',
                        'reference' => '040a37b60e1a9d7ae10b496407b6c3bb63b47038',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'orchestra/testbench-core' => [
                        'pretty_version' => 'v10.9.0',
                        'version' => '10.9.0.0',
                        'reference' => '754d2b71601822d1f57f28119e4dea27ed1a5205',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'orchestra/workbench' => [
                        'pretty_version' => 'v10.0.8',
                        'version' => '10.0.8.0',
                        'reference' => '88bb9b5872539dd8b556b232a1b466f639c18259',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/workbench',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest' => [
                        'pretty_version' => 'v4.4.1',
                        'version' => '4.4.1.0',
                        'reference' => 'f96a1b27864b585b0b29b0ee7331176726f7e54a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin' => [
                        'pretty_version' => 'v4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
                        'type' => 'composer-plugin',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest-plugin',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-arch' => [
                        'pretty_version' => 'v4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '25bb17e37920ccc35cbbcda3b00d596aadf3e58d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest-plugin-arch',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-laravel' => [
                        'pretty_version' => 'v4.1.0',
                        'version' => '4.1.0.0',
                        'reference' => '3057a36669ff11416cc0dc2b521b3aec58c488d0',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest-plugin-laravel',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-mutate' => [
                        'pretty_version' => 'v4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest-plugin-mutate',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-profanity' => [
                        'pretty_version' => 'v4.2.1',
                        'version' => '4.2.1.0',
                        'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest-plugin-profanity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/manifest' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '54750ef60c58e43759730615a392c31c80e23176',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phar-io/manifest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/version' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phar-io/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/reflection-common' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpdocumentor/reflection-common',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/reflection-docblock' => [
                        'pretty_version' => '5.6.6',
                        'version' => '5.6.6.0',
                        'reference' => '5cee1d3dfc2d2aa6599834520911d246f656bcb8',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpdocumentor/reflection-docblock',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/type-resolver' => [
                        'pretty_version' => '1.12.0',
                        'version' => '1.12.0.0',
                        'reference' => '92a98ada2b93d9b201a613cb5a33584dde25f195',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpdocumentor/type-resolver',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpoption/phpoption' => [
                        'pretty_version' => '1.9.5',
                        'version' => '1.9.5.0',
                        'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpoption/phpoption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpdoc-parser' => [
                        'pretty_version' => '2.3.2',
                        'version' => '2.3.2.0',
                        'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpstan/phpdoc-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpstan/phpstan' => [
                        'pretty_version' => '2.1.40',
                        'version' => '2.1.40.0',
                        'reference' => '9b2c7aeb83a75d8680ea5e7c9b7fca88052b766b',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpstan/phpstan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-code-coverage' => [
                        'pretty_version' => '12.5.3',
                        'version' => '12.5.3.0',
                        'reference' => 'b015312f28dd75b75d3422ca37dff2cd1a565e8d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpunit/php-code-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-file-iterator' => [
                        'pretty_version' => '6.0.1',
                        'version' => '6.0.1.0',
                        'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpunit/php-file-iterator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-invoker' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpunit/php-invoker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-text-template' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpunit/php-text-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-timer' => [
                        'pretty_version' => '8.0.0',
                        'version' => '8.0.0.0',
                        'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpunit/php-timer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/phpunit' => [
                        'pretty_version' => '12.5.12',
                        'version' => '12.5.12.0',
                        'reference' => '418e06b3b46b0d54bad749ff4907fc7dfb530199',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../phpunit/phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'psr/clock' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/container' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/container',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/container-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.1|2.0',
                        ],
                    ],
                    'psr/event-dispatcher' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-client' => [
                        'pretty_version' => '1.0.3',
                        'version' => '1.0.3.0',
                        'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-client-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-factory' => [
                        'pretty_version' => '1.1.0',
                        'version' => '1.1.0.0',
                        'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/http-factory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-message' => [
                        'pretty_version' => '2.0',
                        'version' => '2.0.0.0',
                        'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/http-message',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-message-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/log' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/log',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/log-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                            1 => '3.0.0',
                        ],
                    ],
                    'psr/simple-cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/simple-cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/simple-cache-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psy/psysh' => [
                        'pretty_version' => 'v0.12.20',
                        'version' => '0.12.20.0',
                        'reference' => '19678eb6b952a03b8a1d96ecee9edba518bb0373',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psy/psysh',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'ralouphie/getallheaders' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../ralouphie/getallheaders',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/collection' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../ramsey/collection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/uuid' => [
                        'pretty_version' => '4.9.2',
                        'version' => '4.9.2.0',
                        'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../ramsey/uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rhumsaa/uuid' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '4.9.2',
                        ],
                    ],
                    'sebastian/cli-parser' => [
                        'pretty_version' => '4.2.0',
                        'version' => '4.2.0.0',
                        'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/cli-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/comparator' => [
                        'pretty_version' => '7.1.4',
                        'version' => '7.1.4.0',
                        'reference' => '6a7de5df2e094f9a80b40a522391a7e6022df5f6',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/comparator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/complexity' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/complexity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/diff' => [
                        'pretty_version' => '7.0.0',
                        'version' => '7.0.0.0',
                        'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/diff',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/environment' => [
                        'pretty_version' => '8.0.3',
                        'version' => '8.0.3.0',
                        'reference' => '24a711b5c916efc6d6e62aa65aa2ec98fef77f68',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/environment',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/exporter' => [
                        'pretty_version' => '7.0.2',
                        'version' => '7.0.2.0',
                        'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/exporter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/global-state' => [
                        'pretty_version' => '8.0.2',
                        'version' => '8.0.2.0',
                        'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/global-state',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/lines-of-code' => [
                        'pretty_version' => '4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/lines-of-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-enumerator' => [
                        'pretty_version' => '7.0.0',
                        'version' => '7.0.0.0',
                        'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/object-enumerator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-reflector' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/object-reflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/recursion-context' => [
                        'pretty_version' => '7.0.1',
                        'version' => '7.0.1.0',
                        'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/recursion-context',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/type' => [
                        'pretty_version' => '6.0.3',
                        'version' => '6.0.3.0',
                        'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/type',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/version' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../sebastian/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/once' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'staabm/side-effects-detector' => [
                        'pretty_version' => '1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../staabm/side-effects-detector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'symfony/clock' => [
                        'pretty_version' => 'v8.0.0',
                        'version' => '8.0.0.0',
                        'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/console' => [
                        'pretty_version' => 'v7.4.4',
                        'version' => '7.4.4.0',
                        'reference' => '41e38717ac1dd7a46b6bda7d6a82af2d98a78894',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/console',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/css-selector' => [
                        'pretty_version' => 'v8.0.0',
                        'version' => '8.0.0.0',
                        'reference' => '6225bd458c53ecdee056214cb4a2ffaf58bd592b',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/css-selector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/deprecation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/deprecation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/error-handler' => [
                        'pretty_version' => 'v7.4.4',
                        'version' => '7.4.4.0',
                        'reference' => '8da531f364ddfee53e36092a7eebbbd0b775f6b8',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/error-handler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher' => [
                        'pretty_version' => 'v8.0.4',
                        'version' => '8.0.4.0',
                        'reference' => '99301401da182b6cfaa4700dbe9987bb75474b47',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/event-dispatcher-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.0|3.0',
                        ],
                    ],
                    'symfony/finder' => [
                        'pretty_version' => 'v7.4.5',
                        'version' => '7.4.5.0',
                        'reference' => 'ad4daa7c38668dcb031e63bc99ea9bd42196a2cb',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/finder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-foundation' => [
                        'pretty_version' => 'v7.4.5',
                        'version' => '7.4.5.0',
                        'reference' => '446d0db2b1f21575f1284b74533e425096abdfb6',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-foundation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-kernel' => [
                        'pretty_version' => 'v7.4.5',
                        'version' => '7.4.5.0',
                        'reference' => '229eda477017f92bd2ce7615d06222ec0c19e82a',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-kernel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mailer' => [
                        'pretty_version' => 'v7.4.4',
                        'version' => '7.4.4.0',
                        'reference' => '7b750074c40c694ceb34cb926d6dffee231c5cd6',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/mailer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mime' => [
                        'pretty_version' => 'v7.4.5',
                        'version' => '7.4.5.0',
                        'reference' => 'b18c7e6e9eee1e19958138df10412f3c4c316148',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/mime',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-ctype' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-ctype',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-grapheme' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-intl-grapheme',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-idn' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-intl-idn',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-normalizer' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-intl-normalizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-mbstring' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-mbstring',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php80' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-php80',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php83' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-php83',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php84' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-php84',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php85' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-php85',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-uuid' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/polyfill-uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/process' => [
                        'pretty_version' => 'v7.4.5',
                        'version' => '7.4.5.0',
                        'reference' => '608476f4604102976d687c483ac63a79ba18cc97',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/routing' => [
                        'pretty_version' => 'v7.4.4',
                        'version' => '7.4.4.0',
                        'reference' => '0798827fe2c79caeed41d70b680c2c3507d10147',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/routing',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/service-contracts' => [
                        'pretty_version' => 'v3.6.1',
                        'version' => '3.6.1.0',
                        'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/service-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/string' => [
                        'pretty_version' => 'v8.0.4',
                        'version' => '8.0.4.0',
                        'reference' => '758b372d6882506821ed666032e43020c4f57194',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/string',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation' => [
                        'pretty_version' => 'v8.0.4',
                        'version' => '8.0.4.0',
                        'reference' => 'db70c8ce7db74fd2da7b1d268db46b2a8ce32c10',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/translation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-contracts' => [
                        'pretty_version' => 'v3.6.1',
                        'version' => '3.6.1.0',
                        'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/translation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.3|3.0',
                        ],
                    ],
                    'symfony/uid' => [
                        'pretty_version' => 'v7.4.4',
                        'version' => '7.4.4.0',
                        'reference' => '7719ce8aba76be93dfe249192f1fbfa52c588e36',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/uid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/var-dumper' => [
                        'pretty_version' => 'v7.4.4',
                        'version' => '7.4.4.0',
                        'reference' => '0e4769b46a0c3c62390d124635ce59f66874b282',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/var-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/yaml' => [
                        'pretty_version' => 'v7.4.1',
                        'version' => '7.4.1.0',
                        'reference' => '24dd4de28d2e3988b311751ac49e684d783e2345',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/yaml',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'ta-tikoma/phpunit-architecture-test' => [
                        'pretty_version' => '0.8.7',
                        'version' => '0.8.7.0',
                        'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../ta-tikoma/phpunit-architecture-test',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'theseer/tokenizer' => [
                        'pretty_version' => '2.0.1',
                        'version' => '2.0.1.0',
                        'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../theseer/tokenizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tijsverkoyen/css-to-inline-styles' => [
                        'pretty_version' => 'v2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../tijsverkoyen/css-to-inline-styles',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'vlucas/phpdotenv' => [
                        'pretty_version' => 'v5.6.3',
                        'version' => '5.6.3.0',
                        'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../vlucas/phpdotenv',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'voku/portable-ascii' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../voku/portable-ascii',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'webmozart/assert' => [
                        'pretty_version' => '2.1.5',
                        'version' => '2.1.5.0',
                        'reference' => '79155f94852fa27e2f73b459f6503f5e87e2c188',
                        'type' => 'library',
                        'install_path' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../webmozart/assert',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                ],
            ],
        ],
        'executedFilesHashes' => [
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/larastan/larastan/bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
            'phar:///Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
            'phar:///Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
            'phar:///Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
            'phar:///Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
        ],
        'phpExtensions' => [
            0 => 'Core',
            1 => 'FFI',
            2 => 'PDO',
            3 => 'Phar',
            4 => 'Reflection',
            5 => 'SPL',
            6 => 'SimpleXML',
            7 => 'Zend OPcache',
            8 => 'bcmath',
            9 => 'bz2',
            10 => 'calendar',
            11 => 'ctype',
            12 => 'curl',
            13 => 'date',
            14 => 'dba',
            15 => 'dom',
            16 => 'exif',
            17 => 'fileinfo',
            18 => 'filter',
            19 => 'ftp',
            20 => 'gd',
            21 => 'gettext',
            22 => 'gmp',
            23 => 'hash',
            24 => 'herd',
            25 => 'iconv',
            26 => 'igbinary',
            27 => 'imagick',
            28 => 'imap',
            29 => 'intl',
            30 => 'json',
            31 => 'ldap',
            32 => 'libxml',
            33 => 'mbstring',
            34 => 'mongodb',
            35 => 'mysqli',
            36 => 'mysqlnd',
            37 => 'openssl',
            38 => 'pcntl',
            39 => 'pcre',
            40 => 'pdo_mysql',
            41 => 'pdo_pgsql',
            42 => 'pdo_sqlite',
            43 => 'pdo_sqlsrv',
            44 => 'pgsql',
            45 => 'posix',
            46 => 'random',
            47 => 'readline',
            48 => 'redis',
            49 => 'session',
            50 => 'shmop',
            51 => 'soap',
            52 => 'sockets',
            53 => 'sodium',
            54 => 'sqlite3',
            55 => 'sqlsrv',
            56 => 'standard',
            57 => 'sysvmsg',
            58 => 'sysvsem',
            59 => 'sysvshm',
            60 => 'tokenizer',
            61 => 'xml',
            62 => 'xmlreader',
            63 => 'xmlwriter',
            64 => 'xsl',
            65 => 'zip',
            66 => 'zlib',
            67 => 'zstd',
        ],
        'stubFiles' => [
        ],
        'level' => '9',
    ],
    'projectExtensionFiles' => [
    ],
    'errorsCallback' => static function (): array {
        return [
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider::exchangeCodeForTokens() has invalid return type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
                    'line' => 12,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 12,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider::getUserFromToken() has invalid return type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
                    'line' => 14,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 14,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider::refreshAccessToken() has invalid return type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
                    'line' => 16,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 16,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::microsoftIdentity() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\MorphOne does not specify its types: TRelatedModel, TDeclaringModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'line' => 13,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 13,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::findOrCreateFromMicrosoft() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'line' => 17,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 17,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::linkMicrosoftAccount() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'line' => 19,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 19,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::updateMicrosoftTokens() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'line' => 25,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 25,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated::__construct() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php',
                    'line' => 12,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 12,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserRegistered::__construct() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php',
                    'line' => 12,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 12,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php',
                    'line' => 9,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 9,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 11,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 11,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 16,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 16,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 21,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 21,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 26,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 26,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 31,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 31,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 36,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 36,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 41,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 41,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 46,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 46,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'line' => 51,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 51,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                    'line' => 15,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 15,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                    'line' => 20,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 20,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                    'line' => 25,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 25,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to int.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController)',
                    'line' => 38,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 38,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\Int_',
                    'identifier' => 'cast.int',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Binary operation "." between mixed and non-falsy-string results in an error.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController)',
                    'line' => 56,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 56,
                    'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
                    'identifier' => 'binaryOp.invalid',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $microsoftUser of method CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController::resolveUser() has invalid type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController)',
                    'line' => 67,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 67,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to method toArray() on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController)',
                    'line' => 71,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 71,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined static method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::where().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController)',
                    'line' => 91,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 91,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'staticMethod.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to string.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'line' => 31,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 31,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
                    'identifier' => 'cast.string',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to string.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'line' => 32,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 32,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
                    'identifier' => 'cast.string',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to string.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'line' => 42,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 42,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
                    'identifier' => 'cast.string',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $accessToken on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'line' => 52,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 52,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to method withToken() on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'line' => 52,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 52,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $user of method Illuminate\\Contracts\\Auth\\StatefulGuard::login() expects Illuminate\\Contracts\\Auth\\Authenticatable, CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'line' => 56,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 56,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to int.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController)',
                    'line' => 38,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 38,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\Int_',
                    'identifier' => 'cast.int',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Binary operation "." between mixed and non-falsy-string results in an error.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController)',
                    'line' => 56,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 56,
                    'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
                    'identifier' => 'binaryOp.invalid',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $microsoftUser of method CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController::resolveUser() has invalid type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController)',
                    'line' => 67,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 67,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to method toArray() on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController)',
                    'line' => 71,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 71,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined static method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::where().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController)',
                    'line' => 91,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 91,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'staticMethod.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $tenantId of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService constructor expects string|null, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 20,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 19,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $clientId of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService constructor expects string|null, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 21,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 19,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $clientSecret of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService constructor expects string|null, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 22,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 19,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $redirectUri of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService constructor expects string|null, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 23,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 19,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $scopes of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService constructor expects array<int, string>, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 24,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 19,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter $http of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService constructor expects array, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 25,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 19,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #2 $http of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService constructor expects array, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'line' => 37,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 35,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity::authenticatable() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\MorphTo does not specify its types: TRelatedModel, TDeclaringModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'line' => 30,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 30,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity::$token_expires_at.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'line' => 37,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 37,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity::scopeByMicrosoftId() has parameter $query with generic class Illuminate\\Database\\Eloquent\\Builder but does not specify its types: TModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'line' => 44,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 44,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity::scopeByMicrosoftId() return type with generic class Illuminate\\Database\\Eloquent\\Builder does not specify its types: TModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'line' => 44,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 44,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity::scopeForAuthenticatable() has parameter $query with generic class Illuminate\\Database\\Eloquent\\Builder but does not specify its types: TModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'line' => 49,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 49,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity::scopeForAuthenticatable() return type with generic class Illuminate\\Database\\Eloquent\\Builder does not specify its types: TModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'line' => 49,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 49,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset string on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php',
                    'line' => 17,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 17,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService::__construct() has parameter $http with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 18,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 18,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService::getUserProfile() return type has no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 46,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 46,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService::getUserProfile() should return array{id: string, displayName: string|null, givenName: string|null, surname: string|null, mail: string|null, userPrincipalName: string|null, jobTitle: string|null, department: string|null, ...} but returns mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 62,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 62,
                    'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
                    'identifier' => 'return.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $url of method Illuminate\\Http\\Client\\PendingRequest<false>::get() expects string, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 76,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 76,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'value\' on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 80,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 80,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $source of method Illuminate\\Support\\Collection<(int|string),mixed>::concat() expects iterable<(int|string), mixed>, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 80,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 80,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'@odata.nextLink\' on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 81,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 81,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to function is_string() with string will always evaluate to true.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 108,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
                    'nodeLine' => 108,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'function.alreadyNarrowedType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable::getAuthIdentifier().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 122,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 122,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to int.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 126,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 126,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\Int_',
                    'identifier' => 'cast.int',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #2 $haystack of function in_array expects array, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 146,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 146,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                11 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$token.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 156,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 156,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                12 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$token.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 165,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 165,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                13 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 179,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 179,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                14 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to int.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 180,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 180,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\Int_',
                    'identifier' => 'cast.int',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                15 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot cast mixed to int.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 181,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 181,
                    'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\Int_',
                    'identifier' => 'cast.int',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                16 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$token.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 186,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 186,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                17 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::isTokenExpired().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 186,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 186,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                18 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$refresh_token.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 190,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 190,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                19 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $accessToken on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 192,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 192,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                20 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$refresh_token.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 193,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 193,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                21 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $refreshToken on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 193,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 193,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                22 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $expiresIn on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'line' => 194,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 194,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService::__construct() has parameter $http with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 27,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 27,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService::exchangeCodeForTokens() has invalid return type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 82,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 82,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'error\' on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 104,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 104,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $error of static method CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException::failed() expects string, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 104,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 103,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'error_description\' on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 105,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 105,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #2 $description of static method CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException::failed() expects string, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 105,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 103,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to static method fromArray() on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 109,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 109,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService::getUserFromToken() has invalid return type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 112,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 112,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to static method fromGraphPayload() on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 125,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 125,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService::refreshAccessToken() has invalid return type CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 128,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 128,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'error\' on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 142,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 142,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                11 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $error of static method CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException::failed() expects string, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 142,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 141,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                12 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access offset \'error_description\' on mixed.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 143,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 143,
                    'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
                    'identifier' => 'offsetAccess.nonOffsetAccessible',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                13 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #2 $description of static method CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException::failed() expects string, mixed given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 143,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 141,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                14 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to static method fromArray() on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'line' => 147,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 147,
                    'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 35,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 34,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $email on Illuminate\\Foundation\\Auth\\User|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 47,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 47,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 47,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 47,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $microsoftIdentity on Illuminate\\Foundation\\Auth\\User|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 48,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 48,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 48,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 48,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $microsoftIdentity on Illuminate\\Foundation\\Auth\\User|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 49,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 49,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 70,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 69,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $email on Illuminate\\Foundation\\Auth\\User|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 80,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 80,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 80,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 80,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 97,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 96,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $microsoft_id on CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 109,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 109,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                11 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 109,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 109,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                12 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 119,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 118,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                13 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 133,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 132,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                14 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 147,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 146,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                15 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 160,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 159,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                16 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 174,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 173,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                17 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 189,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 188,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                18 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 205,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 204,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                19 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 220,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 219,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                20 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 243,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 242,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                21 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 259,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 258,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                22 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 277,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 276,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                23 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 298,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 297,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                24 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 325,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 324,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                25 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 341,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 340,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                26 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 357,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 356,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                27 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'line' => 372,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 372,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'line' => 23,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 22,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'line' => 53,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 52,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'line' => 81,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 80,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::withSession().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'line' => 92,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 91,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method Mockery\\ExpectationInterface|Mockery\\HigherOrderMessage::once().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                    'line' => 79,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 79,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method Mockery\\ExpectationInterface|Mockery\\HigherOrderMessage::once().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                    'line' => 81,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 80,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::microsoftIdentity() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\MorphOne does not specify its types: TRelatedModel, TDeclaringModel',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 12,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 12,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.generics',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unsafe usage of new static().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 20,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
                    'nodeLine' => 20,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'new.static',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::findByMicrosoftId() should return static(CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)|null but returns Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 23,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 23,
                    'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
                    'identifier' => 'return.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::findOrCreateFromMicrosoft() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 26,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 26,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::findOrCreateFromMicrosoft() should return static(CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser) but returns CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 41,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 41,
                    'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
                    'identifier' => 'return.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::findOrCreateFromMicrosoft() should return static(CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser) but returns CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 54,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => null,
                    'nodeLine' => 54,
                    'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
                    'identifier' => 'return.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::linkMicrosoftAccount() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 57,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 57,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Method CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::updateMicrosoftTokens() has parameter $microsoftUser with no value type specified in iterable type array.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php (in context of class CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser)',
                    'line' => 72,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                    'traitFilePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
                    'nodeLine' => 72,
                    'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
                    'identifier' => 'missingType.iterableValue',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $email on CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 21,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 21,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 21,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 21,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::$email.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 41,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 41,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 41,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 41,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::$name.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 42,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 42,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 42,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 42,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::$email_verified_at.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 43,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 43,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 43,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 43,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $microsoft_id on CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 45,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 45,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 45,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 45,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser::$email.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 68,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 68,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                11 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 68,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 68,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                12 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $microsoft_id on CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 86,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 86,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                13 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 86,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 86,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                14 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $microsoft_id on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 105,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 105,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                15 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 105,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 105,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                16 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $linked_at on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 106,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 106,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                17 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 106,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 106,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                18 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $token_expires_at on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 107,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 107,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                19 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 107,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 107,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                20 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method getRawOriginal() on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 166,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 166,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                21 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $token on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 169,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 169,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                22 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 169,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 169,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                23 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $refresh_token on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 170,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 170,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                24 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 170,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 170,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                25 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $token on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 251,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 251,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                26 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 251,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 251,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                27 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $refresh_token on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 252,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 252,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                28 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 252,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 252,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                29 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $token_expires_at on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 253,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 253,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                30 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 253,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 253,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                31 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot call method toArray() on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 270,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 270,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                32 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $authenticatable on CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 290,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 290,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                33 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $authenticatable on CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 291,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 291,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                34 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $id on Illuminate\\Database\\Eloquent\\Model|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 291,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 291,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                35 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'line' => 291,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 291,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$oauthService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 29,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 29,
                    'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 30,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 30,
                    'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $oauthService of class CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService constructor expects CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider, Mockery\\MockInterface given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 30,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 30,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 44,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 44,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$oauthService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 54,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 54,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Instantiated class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken not found.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 58,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 58,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 67,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 67,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 86,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 86,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 102,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 102,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 116,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 116,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 130,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 130,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                11 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 142,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 142,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                12 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$oauthService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 148,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 148,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                13 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Instantiated class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken not found.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 151,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 151,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                14 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 157,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 157,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                15 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Cannot access property $refresh_token on CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity|null.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 163,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 163,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.nonObject',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                16 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 163,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 163,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                17 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property PHPUnit\\Framework\\TestCase::$graphService.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'line' => 184,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 184,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to an undefined property Pest\\Mixins\\Expectation<string|null>::$not.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 24,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
                    'nodeLine' => 24,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'property.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $accessToken on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 81,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 81,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 81,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 81,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $refreshToken on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 82,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 82,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 82,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 82,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                5 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $expiresIn on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 83,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 83,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                6 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 83,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 83,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                7 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $id on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 167,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 167,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                8 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 167,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 167,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                9 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $name on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 168,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 168,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                10 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 168,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 168,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                11 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $email on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 169,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 169,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                12 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 169,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 169,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                13 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $jobTitle on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 170,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 170,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                14 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 170,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 170,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                15 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $department on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 171,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 171,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                16 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 171,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 171,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                17 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $raw on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 172,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 172,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                18 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 172,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 172,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                19 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Access to property $accessToken on an unknown class CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 194,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
                    'nodeLine' => 194,
                    'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
                    'identifier' => 'class.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                20 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Unable to resolve the template type TValue in call to function expect',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'line' => 194,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                    'traitFilePath' => null,
                    'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
                    'nodeLine' => 194,
                    'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
                    'identifier' => 'argument.templateType',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php' => [
                0 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Call to an undefined method Mockery\\ExpectationInterface|Mockery\\HigherOrderMessage::andReturn().',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
                    'line' => 36,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 36,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'method.notFound',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => \PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $app of class CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOServiceProvider constructor expects Illuminate\\Contracts\\Foundation\\Application, Mockery\\LegacyMockInterface given.',
                    'file' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
                    'line' => 38,
                    'canBeIgnored' => true,
                    'filePath' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 38,
                    'nodeType' => 'PhpParser\\Node\\Expr\\New_',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
        ];
    },
    'locallyIgnoredErrorsCallback' => static function (): array {
        return [
        ];
    },
    'linesToIgnore' => [
    ],
    'unmatchedLineIgnores' => [
    ],
    'collectedDataCallback' => static function (): array {
        return [
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated',
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
                        1 => 'Illuminate\\Queue\\SerializesModels',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserRegistered',
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
                        1 => 'Illuminate\\Queue\\SerializesModels',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\InvalidStateException',
                        1 => 'make',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\InvalidStateException',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'configurationMissing',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    1 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'guardNotConfigured',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    2 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'guardMismatch',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    3 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'guardModelNotConfigured',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    4 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'modelClassNotFound',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    5 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'modelMissingTrait',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    6 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'userNotFound',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    7 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'stateExpired',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                    8 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                        1 => 'invalidRedirectUri',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                        1 => 'failed',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                    ],
                    1 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                        1 => 'missingAuthorizationCode',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                    ],
                    2 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                        1 => 'missingCodeVerifier',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Facades/MicrosoftEntraSSO.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Facades\\MicrosoftEntraSSO',
                        1 => 'getFacadeAccessor',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Facades\\MicrosoftEntraSSO',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php' => [
                'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
                        1 => 16,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated',
                        1 => 'dispatch',
                        2 => 83,
                    ],
                    1 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated',
                        1 => 'dispatch',
                        2 => 96,
                    ],
                    2 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserRegistered',
                        1 => 'dispatch',
                        2 => 107,
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated',
                        1 => 'dispatch',
                        2 => 83,
                    ],
                    1 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated',
                        1 => 'dispatch',
                        2 => 96,
                    ],
                    2 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserRegistered',
                        1 => 'dispatch',
                        2 => 107,
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Middleware/EnsureSSOEnabled.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'abort',
                        1 => 19,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                        1 => 'casts',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php' => [
                'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                        1 => 10,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 30,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 54,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 86,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 115,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 129,
                    ],
                    5 => [
                        0 => 'it',
                        1 => 143,
                    ],
                    6 => [
                        0 => 'it',
                        1 => 156,
                    ],
                    7 => [
                        0 => 'it',
                        1 => 170,
                    ],
                    8 => [
                        0 => 'it',
                        1 => 185,
                    ],
                    9 => [
                        0 => 'it',
                        1 => 201,
                    ],
                    10 => [
                        0 => 'it',
                        1 => 215,
                    ],
                    11 => [
                        0 => 'config',
                        1 => 217,
                    ],
                    12 => [
                        0 => 'it',
                        1 => 234,
                    ],
                    13 => [
                        0 => 'it',
                        1 => 255,
                    ],
                    14 => [
                        0 => 'it',
                        1 => 273,
                    ],
                    15 => [
                        0 => 'it',
                        1 => 289,
                    ],
                    16 => [
                        0 => 'it',
                        1 => 310,
                    ],
                    17 => [
                        0 => 'it',
                        1 => 337,
                    ],
                    18 => [
                        0 => 'it',
                        1 => 353,
                    ],
                    19 => [
                        0 => 'it',
                        1 => 368,
                    ],
                    20 => [
                        0 => 'config',
                        1 => 370,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 45,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 46,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 47,
                    ],
                    3 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 48,
                    ],
                    4 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 49,
                    ],
                    5 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 80,
                    ],
                    6 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 81,
                    ],
                    7 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 108,
                    ],
                    8 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 109,
                    ],
                    9 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 110,
                    ],
                    10 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 231,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 12,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\Event',
                        1 => 'fake',
                        2 => 32,
                    ],
                    2 => [
                        0 => 'Illuminate\\Support\\Facades\\Event',
                        1 => 'fake',
                        2 => 56,
                    ],
                    3 => [
                        0 => 'Illuminate\\Support\\Facades\\Event',
                        1 => 'fake',
                        2 => 88,
                    ],
                    4 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 235,
                    ],
                    5 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 290,
                    ],
                    6 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 311,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 5,
                    ],
                    1 => [
                        0 => 'config',
                        1 => 20,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 35,
                    ],
                    3 => [
                        0 => 'config',
                        1 => 50,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 65,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 6,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 36,
                    ],
                    2 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 66,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/MiddlewareTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'beforeEach',
                        1 => 8,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 13,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 20,
                    ],
                    3 => [
                        0 => 'config',
                        1 => 21,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 28,
                    ],
                    5 => [
                        0 => 'config',
                        1 => 29,
                    ],
                    6 => [
                        0 => 'it',
                        1 => 36,
                    ],
                    7 => [
                        0 => 'config',
                        1 => 37,
                    ],
                    8 => [
                        0 => 'it',
                        1 => 44,
                    ],
                    9 => [
                        0 => 'config',
                        1 => 45,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 8,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 26,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 36,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 43,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 51,
                    ],
                    5 => [
                        0 => 'it',
                        1 => 63,
                    ],
                    6 => [
                        0 => 'config',
                        1 => 64,
                    ],
                    7 => [
                        0 => 'it',
                        1 => 77,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 15,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 48,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 56,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Pest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\UsesCall',
                        ],
                        1 => 'in',
                        2 => 5,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Tests\\TestCase',
                        1 => 'getPackageProviders',
                        2 => 'CodebarAg\\MicrosoftEntraSSO\\Tests\\TestCase',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php' => [
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ExceptionTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 7,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 14,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 21,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 27,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 34,
                    ],
                    5 => [
                        0 => 'it',
                        1 => 41,
                    ],
                    6 => [
                        0 => 'it',
                        1 => 47,
                    ],
                    7 => [
                        0 => 'it',
                        1 => 55,
                    ],
                    8 => [
                        0 => 'it',
                        1 => 63,
                    ],
                    9 => [
                        0 => 'it',
                        1 => 69,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 10,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 11,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 17,
                    ],
                    3 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 18,
                    ],
                    4 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 24,
                    ],
                    5 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 30,
                    ],
                    6 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 31,
                    ],
                    7 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 37,
                    ],
                    8 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 38,
                    ],
                    9 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 44,
                    ],
                    10 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 50,
                    ],
                    11 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 51,
                    ],
                    12 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 52,
                    ],
                    13 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 58,
                    ],
                    14 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 59,
                    ],
                    15 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 60,
                    ],
                    16 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 66,
                    ],
                    17 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 72,
                    ],
                    18 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 73,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 8,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 14,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 18,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 11,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 15,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 21,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 6,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 24,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 30,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 48,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 71,
                    ],
                    5 => [
                        0 => 'it',
                        1 => 89,
                    ],
                    6 => [
                        0 => 'it',
                        1 => 110,
                    ],
                    7 => [
                        0 => 'it',
                        1 => 132,
                    ],
                    8 => [
                        0 => 'it',
                        1 => 152,
                    ],
                    9 => [
                        0 => 'it',
                        1 => 173,
                    ],
                    10 => [
                        0 => 'it',
                        1 => 189,
                    ],
                    11 => [
                        0 => 'it',
                        1 => 205,
                    ],
                    12 => [
                        0 => 'it',
                        1 => 221,
                    ],
                    13 => [
                        0 => 'it',
                        1 => 231,
                    ],
                    14 => [
                        0 => 'it',
                        1 => 256,
                    ],
                    15 => [
                        0 => 'it',
                        1 => 276,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 20,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 21,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 27,
                    ],
                    3 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 40,
                    ],
                    4 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 41,
                    ],
                    5 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 42,
                    ],
                    6 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 43,
                    ],
                    7 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 44,
                    ],
                    8 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 45,
                    ],
                    9 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 67,
                    ],
                    10 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 68,
                    ],
                    11 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 85,
                    ],
                    12 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 86,
                    ],
                    13 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 105,
                    ],
                    14 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 106,
                    ],
                    15 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 107,
                    ],
                    16 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 128,
                    ],
                    17 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeFalse',
                        2 => 129,
                    ],
                    18 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeFalse',
                        2 => 148,
                    ],
                    19 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 149,
                    ],
                    20 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 168,
                    ],
                    21 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 169,
                    ],
                    22 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 170,
                    ],
                    23 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 186,
                    ],
                    24 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 202,
                    ],
                    25 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeFalse',
                        2 => 218,
                    ],
                    26 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 228,
                    ],
                    27 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 251,
                    ],
                    28 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 252,
                    ],
                    29 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 253,
                    ],
                    30 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveKey',
                        2 => 272,
                    ],
                    31 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveKey',
                        2 => 273,
                    ],
                    32 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 290,
                    ],
                    33 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 291,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'beforeEach',
                        1 => 28,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 33,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 51,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 72,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 93,
                    ],
                    5 => [
                        0 => 'it',
                        1 => 107,
                    ],
                    6 => [
                        0 => 'it',
                        1 => 121,
                    ],
                    7 => [
                        0 => 'it',
                        1 => 145,
                    ],
                    8 => [
                        0 => 'it',
                        1 => 166,
                    ],
                    9 => [
                        0 => 'it',
                        1 => 175,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveKey',
                        2 => 46,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveKey',
                        2 => 69,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveCount',
                        2 => 88,
                    ],
                    3 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 89,
                    ],
                    4 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 90,
                    ],
                    5 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveCount',
                        2 => 104,
                    ],
                    6 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 118,
                    ],
                    7 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeFalse',
                        2 => 132,
                    ],
                    8 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\TestCall',
                        ],
                        1 => 'throws',
                        2 => 135,
                    ],
                    9 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveKey',
                        2 => 159,
                    ],
                    10 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 163,
                    ],
                    11 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 170,
                    ],
                    12 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveCount',
                        2 => 185,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 36,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 60,
                    ],
                    2 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 75,
                    ],
                    3 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 96,
                    ],
                    4 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 110,
                    ],
                    5 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 124,
                    ],
                    6 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 138,
                    ],
                    7 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 153,
                    ],
                    8 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 178,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 8,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 14,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 20,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 27,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 48,
                    ],
                    5 => [
                        0 => 'it',
                        1 => 62,
                    ],
                    6 => [
                        0 => 'it',
                        1 => 117,
                    ],
                    7 => [
                        0 => 'it',
                        1 => 145,
                    ],
                    8 => [
                        0 => 'it',
                        1 => 175,
                    ],
                    9 => [
                        0 => 'it',
                        1 => 197,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveLength',
                        2 => 11,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toHaveLength',
                        2 => 17,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 38,
                    ],
                    3 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 59,
                    ],
                    4 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 81,
                    ],
                    5 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 82,
                    ],
                    6 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 83,
                    ],
                    7 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\TestCall',
                        ],
                        1 => 'throws',
                        2 => 86,
                    ],
                    8 => [
                        0 => [
                            0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        ],
                        1 => 'exchangeCodeForTokens',
                        2 => 102,
                    ],
                    9 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\TestCall',
                        ],
                        1 => 'throws',
                        2 => 105,
                    ],
                    10 => [
                        0 => [
                            0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        ],
                        1 => 'exchangeCodeForTokens',
                        2 => 114,
                    ],
                    11 => [
                        0 => [
                            0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        ],
                        1 => 'exchangeCodeForTokens',
                        2 => 134,
                    ],
                    12 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 167,
                    ],
                    13 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 168,
                    ],
                    14 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 169,
                    ],
                    15 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 170,
                    ],
                    16 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 171,
                    ],
                    17 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeArray',
                        2 => 172,
                    ],
                    18 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 194,
                    ],
                    19 => [
                        0 => [
                            0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        ],
                        1 => 'setRedirectUri',
                        2 => 206,
                    ],
                    20 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 208,
                    ],
                    21 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toContain',
                        2 => 211,
                    ],
                    22 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\TestCall',
                        ],
                        1 => 'throws',
                        2 => 214,
                    ],
                    23 => [
                        0 => [
                            0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        ],
                        1 => 'getUserFromToken',
                        2 => 229,
                    ],
                    24 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\TestCall',
                        ],
                        1 => 'throws',
                        2 => 232,
                    ],
                    25 => [
                        0 => [
                            0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        ],
                        1 => 'refreshAccessToken',
                        2 => 248,
                    ],
                    26 => [
                        0 => [
                            0 => 'Pest\\PendingCalls\\TestCall',
                        ],
                        1 => 'throws',
                        2 => 251,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureNewCollector' => [
                    0 => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        1 => 252,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 63,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 87,
                    ],
                    2 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 118,
                    ],
                    3 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 146,
                    ],
                    4 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 176,
                    ],
                    5 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 215,
                    ],
                    6 => [
                        0 => 'Illuminate\\Support\\Facades\\Http',
                        1 => 'fake',
                        2 => 233,
                    ],
                ],
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'it',
                        1 => 9,
                    ],
                    1 => [
                        0 => 'it',
                        1 => 17,
                    ],
                    2 => [
                        0 => 'it',
                        1 => 22,
                    ],
                    3 => [
                        0 => 'it',
                        1 => 27,
                    ],
                    4 => [
                        0 => 'it',
                        1 => 34,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 13,
                    ],
                    1 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBe',
                        2 => 14,
                    ],
                    2 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 18,
                    ],
                    3 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeInstanceOf',
                        2 => 19,
                    ],
                    4 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeArray',
                        2 => 23,
                    ],
                    5 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 24,
                    ],
                    6 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeTrue',
                        2 => 28,
                    ],
                    7 => [
                        0 => [
                            0 => 'Pest\\Mixins\\Expectation',
                        ],
                        1 => 'toBeNull',
                        2 => 44,
                    ],
                ],
            ],
        ];
    },
    'dependencies' => [
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Factory.php' => [
            'fileHash' => '93a2b7d7d4922713644d68848747fc94c0a97f249178475235550edc5a3fd2bd',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Facades/MicrosoftEntraSSO.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php' => [
            'fileHash' => 'f779640c4ac830acbcc74b82d5f99ef040afd96272892238b66154a0e81ff5da',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Factory.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Facades/MicrosoftEntraSSO.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php',
                5 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                6 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                7 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                8 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                9 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php',
                10 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
                11 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                12 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php' => [
            'fileHash' => '2e680d2fceba64113b1d031e7e9d95f570a2211c51ac03b5eba500d240e27b57',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                5 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                6 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php',
                7 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                8 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                9 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php' => [
            'fileHash' => '87f88e2355bb8361d4ccc9515d94ee0670cd52e55eb8e9ce129cb2d679b45e8a',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php' => [
            'fileHash' => '2f8a2d6639a991047856eb7ee11f97e6180c110dc9fb9a485ee10d30783a33f3',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php' => [
            'fileHash' => 'd5d032cd2f4683b049e1ca1594dda6b353c789efbbdf09dc13938f90c96d1db7',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ExceptionTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php' => [
            'fileHash' => 'f5b79819e4f25ba05fe6c34a4ee09b9d8430df156e947087180f76d7de23dc99',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php',
                5 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                6 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                7 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                8 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ExceptionTest.php',
                9 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php' => [
            'fileHash' => 'd488c298b1571270988aabcbe39dc9acccb8e157cd3ffbac74e2485184013a20',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ExceptionTest.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Facades/MicrosoftEntraSSO.php' => [
            'fileHash' => '3f13964021aefaa72fbb247ab9716b440ae62c95f8e912a18015e19bf56869e5',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php' => [
            'fileHash' => 'ee1fa308b1876a0b0783c235a73c52658e91781833d61f32930bb45dae304e52',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
            ],
            'usedTraitDependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php' => [
            'fileHash' => '07095c0f3e8ef84f05594e0d2deafda5ad646388607915d189c6381d5824eb85',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php' => [
            'fileHash' => '7ecfa4e492c887c4c5ad755b0a55f2470237ae95a69943a5488d58ae1a743990',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php' => [
            'fileHash' => '9e9a85709f499856dec443e5681b01ecef3f5ae3a73499e421d8a463237e8260',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php' => [
            'fileHash' => '97a1c6a725a98c6fb09d6ccf031d1930a63a6563efbb048114653d68377340e6',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Middleware/EnsureSSOEnabled.php' => [
            'fileHash' => '38501c0d3f9741ec35663e78cb13a2e324331d94b3a443c979b5694b3dc63bdd',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/MiddlewareTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php' => [
            'fileHash' => '15ba0773b55550d8929a4e3b4a3ee9a9e6278d1b8a2d098d5669ee1f9aa8364c',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
                5 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                6 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                7 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                8 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php' => [
            'fileHash' => 'ef8aeab73045d479ee3fecc27f054029928f4d50920935d4f88d4f2c0f13fd33',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php' => [
            'fileHash' => 'c5e16e1d3c659cf820f2e809e93b5dae47ce59c7b6cb2966ff7333b787f00333',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php' => [
            'fileHash' => 'd1c6e0d410100eb8bac7edac90dab2e32c560ab955ad55cb1b5ecd5567da4c69',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php',
                5 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php',
                6 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php' => [
            'fileHash' => 'fa5320b5f6e081c3c2ea59312c453062a3197c569b7cf6696c048440c5383a6f',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                5 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
            ],
            'usedTraitDependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php' => [
            'fileHash' => 'ae5377e76065a70043e759c2f1b8f1438007276a2f14c6b505bbde2c1a2b5dd5',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/ControllerEdgeCasesTest.php' => [
            'fileHash' => 'ebfe30a2fc0d0313339d52c6e2859d9304e7b23db3b518669616c019e9fe7a69',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/MiddlewareTest.php' => [
            'fileHash' => 'b22a1cbc1cfee3a3c3a57a738443b0149cda14512a8eabd1e5b563ccb640b40f',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php' => [
            'fileHash' => 'ac317ed0e7d92b23b8f3a6d697c28b95222abbbc378bddba95c9e4f19abb1fdf',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Pest.php' => [
            'fileHash' => 'f0a2f5843d664273f1311be4682a6c191dcbb6c02f167bfd6538dfe632954884',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php' => [
            'fileHash' => 'bcad205d9d2822136ea3c48fd18f3de2bb5e28495ed2e2a0e24d30f32620103c',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Pest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php' => [
            'fileHash' => 'd0c7b1c8cf475a65173c1a1cde0c344883584ff74ff8cdcd75ecef2860ad3089',
            'dependentFiles' => [
                0 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php',
                1 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/RedirectTest.php',
                2 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php',
                3 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php',
                4 => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php',
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ExceptionTest.php' => [
            'fileHash' => '0213591f36d3772118cb7846ac65cde9b002802733e560849241dd9273416605',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/FacadeTest.php' => [
            'fileHash' => 'a4d813c4e250b886c116e89ac094af3e7d04348873ca2808b9e82e6d47d03c82',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/HasMicrosoftSSOTest.php' => [
            'fileHash' => 'b757ca7b4e79b6fc7b6d03a00c960ac563e57c6500b1e234062345fa25dd9d3f',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php' => [
            'fileHash' => '90cdf86feef1e97ae26cd91b0aadae8e841981b6ab5beefbce0b054d905d373e',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftOAuthServiceTest.php' => [
            'fileHash' => '2f86c030362f96bb0f3b09245652df52efc8da68f9e306f4e76747ba05c10aeb',
            'dependentFiles' => [
            ],
        ],
        '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/ServiceProviderTest.php' => [
            'fileHash' => 'b1eab37ccd4018f2108deacfffa2b1d92babbaebee75aa5eb67366de1fe93434',
            'dependentFiles' => [
            ],
        ],
    ],
    'exportedNodesCallback' => static function (): array {
        return [
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Factory.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Factory',
                    'phpDoc' => null,
                    'extends' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'driver',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'driver',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                    'phpDoc' => null,
                    'extends' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getAuthorizationUrl',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'state',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'codeVerifier',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'exchangeCodeForTokens',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'code',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'codeVerifier',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserFromToken',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'accessToken',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'refreshAccessToken',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'refreshToken',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'stateless',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'stateless',
                                    'type' => 'bool',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                    'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @property-read MicrosoftSSOIdentity|null $microsoftIdentity
 */',
                        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                        'uses' => [
                            'microsoftssoidentity' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                            'morphone' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOne',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'extends' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'microsoftIdentity',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOne',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'findByMicrosoftId',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => '?static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftId',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'findOrCreateFromMicrosoft',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'linkMicrosoftAccount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'hasMicrosoftSSOLinked',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'isMicrosoftTokenExpired',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateMicrosoftTokens',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserAuthenticated.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserAuthenticated',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
                        1 => 'Illuminate\\Queue\\SerializesModels',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'mixed',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Events/SSOUserRegistered.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Events\\SSOUserRegistered',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
                        1 => 'Illuminate\\Queue\\SerializesModels',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'mixed',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/InvalidStateException.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\InvalidStateException',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'make',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/SSOException.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Exception',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'configurationMissing',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'key',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'guardNotConfigured',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'guardMismatch',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'expectedGuard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'actualGuard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'guardModelNotConfigured',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'modelClassNotFound',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'modelMissingTrait',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userNotFound',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftId',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'stateExpired',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'invalidRedirectUri',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uri',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Exceptions/TokenExchangeException.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'failed',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'error',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'description',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'missingAuthorizationCode',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'missingCodeVerifier',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Facades/MicrosoftEntraSSO.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Facades\\MicrosoftEntraSSO',
                    'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @method static \\CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider driver(?string $driver = null)
 *
 * @see \\CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager
 */',
                        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Facades',
                        'uses' => [
                            'factory' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Factory',
                            'facade' => 'Illuminate\\Support\\Facades\\Facade',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\Facades\\Facade',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getFacadeAccessor',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/Concerns/HandlesMicrosoftSSO.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
                    'phpDoc' => null,
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'validateGuard',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'validateState',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getCallbackUrl',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'redirectToLoginWithError',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'message',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'resolveUser',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Routing\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'oauthService',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__invoke',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Routing\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'oauthService',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__invoke',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Factory',
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'provider',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'driver',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'driver',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerRoutes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerMigrations',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerViews',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerPublishables',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Middleware/EnsureSSOEnabled.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Middleware\\EnsureSSOEnabled',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'next',
                                    'type' => 'Closure',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Models/MicrosoftSSOIdentity.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Model',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'table',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'guarded',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'casts',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'hidden',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'authenticatable',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'isTokenExpired',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'scopeByMicrosoftId',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Builder',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftId',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'scopeForAuthenticatable',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Builder',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/GuardConfigValidator.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\GuardConfigValidator',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'guardConfig',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array{model: class-string<SSOAuthenticatable>, redirect_after_login?: string}
     */',
                                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                                'uses' => [
                                    'ssoauthenticatable' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'ssoexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guard',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state([
                            'constants' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state([
                                    'name' => 'GRAPH_BASE',
                                    'value' => '\'https://graph.microsoft.com/v1.0\'',
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'public' => false,
                            'private' => false,
                            'final' => false,
                            'phpDoc' => null,
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'oauthService',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'http',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserProfile',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Fetch extended profile information from Microsoft Graph /me endpoint.
     *
     * @return array{
     *     id: string,
     *     displayName: ?string,
     *     givenName: ?string,
     *     surname: ?string,
     *     mail: ?string,
     *     userPrincipalName: ?string,
     *     jobTitle: ?string,
     *     department: ?string,
     *     officeLocation: ?string,
     *     mobilePhone: ?string,
     *     businessPhones: array,
     *     city: ?string,
     *     state: ?string,
     *     country: ?string,
     *     postalCode: ?string,
     *     companyName: ?string,
     *     employeeId: ?string,
     * }
     */',
                                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                                'uses' => [
                                    'provider' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'ssoauthenticatable' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'ssoexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                                    'microsoftssoidentity' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                                    'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'cache' => 'Illuminate\\Support\\Facades\\Cache',
                                    'http' => 'Illuminate\\Support\\Facades\\Http',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserGroups',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Fetch all AD security groups the user belongs to.
     *
     * @return Collection<int, array{id: string, displayName: ?string, description: ?string}>
     */',
                                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                                'uses' => [
                                    'provider' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'ssoauthenticatable' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'ssoexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                                    'microsoftssoidentity' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                                    'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'cache' => 'Illuminate\\Support\\Facades\\Cache',
                                    'http' => 'Illuminate\\Support\\Facades\\Http',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Support\\Collection',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserPhotoDataUri',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Fetch the current user\'s Microsoft profile photo as a data URI.
     */',
                                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                                'uses' => [
                                    'provider' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'ssoauthenticatable' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'ssoexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                                    'microsoftssoidentity' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                                    'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'cache' => 'Illuminate\\Support\\Facades\\Cache',
                                    'http' => 'Illuminate\\Support\\Facades\\Http',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?string',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'isUserInGroup',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Efficiently check if the user is a member of a specific AD group.
     */',
                                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                                'uses' => [
                                    'provider' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'ssoauthenticatable' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'ssoexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                                    'microsoftssoidentity' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                                    'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'cache' => 'Illuminate\\Support\\Facades\\Cache',
                                    'http' => 'Illuminate\\Support\\Facades\\Http',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'groupId',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'resolveGroupMembership',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'groupId',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'authenticatedRequest',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\Client\\PendingRequest',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'refreshToken',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'authorizeEndpoint',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tokenEndpoint',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'graphEndpoint',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'stateless',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  array<int, string>  $scopes
     */',
                                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                                'uses' => [
                                    'provider' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                    'ssotoken' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                                    'ssouser' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser',
                                    'ssoexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\SSOException',
                                    'tokenexchangeexception' => 'CodebarAg\\MicrosoftEntraSSO\\Exceptions\\TokenExchangeException',
                                    'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
                                    'http' => 'Illuminate\\Support\\Facades\\Http',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'tenantId',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'clientId',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'clientSecret',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'redirectUri',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                4 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'scopes',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                                5 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'http',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'stateless',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'stateless',
                                    'type' => 'bool',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'generateState',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'generateCodeVerifier',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'generateCodeChallenge',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'codeVerifier',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getAuthorizationUrl',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'state',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'codeVerifier',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'exchangeCodeForTokens',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'code',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'codeVerifier',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserFromToken',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'accessToken',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'refreshAccessToken',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'refreshToken',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getRedirectUri',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'setRedirectUri',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uri',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'validateConfiguration',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        16 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'validateRedirectUri',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        17 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'httpClient',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\Client\\PendingRequest',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                    'phpDoc' => null,
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'microsoftIdentity',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOne',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'findByMicrosoftId',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => '?static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftId',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'findOrCreateFromMicrosoft',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'static',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'linkMicrosoftAccount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateMicrosoftTokens',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'microsoftUser',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'hasMicrosoftSSOLinked',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'isMicrosoftTokenExpired',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'unlinkMicrosoftAccount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Feature/CallbackTest.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state([
                    'name' => 'fakeSuccessfulMicrosoftAuth',
                    'phpDoc' => null,
                    'byRef' => false,
                    'returnType' => 'void',
                    'parameters' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestCase.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Tests\\TestCase',
                    'phpDoc' => null,
                    'abstract' => true,
                    'final' => false,
                    'extends' => 'Orchestra\\Testbench\\TestCase',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'setUp',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getPackageProviders',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'app',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'defineEnvironment',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'app',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerTestRoutes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'setUpDatabase',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/TestUser.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Auth\\User',
                    'implements' => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                    ],
                    'usedTraits' => [
                        0 => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'table',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/tests/Unit/MicrosoftGraphServiceTest.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state([
                    'name' => 'createTestUserWithIdentity',
                    'phpDoc' => null,
                    'byRef' => false,
                    'returnType' => 'CodebarAg\\MicrosoftEntraSSO\\Tests\\TestUser',
                    'parameters' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                            'name' => 'expired',
                            'type' => 'bool',
                            'byRef' => false,
                            'variadic' => false,
                            'hasDefault' => true,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
        ];
    },
];
