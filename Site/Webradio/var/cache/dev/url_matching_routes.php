<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/chaines' => [
            [['_route' => 'Chaines', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::home'], null, null, null, false, false, null],
            [['_route' => 'chaines', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::home'], null, ['GET' => 0], null, false, false, null],
        ],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/userdashboard' => [
            [['_route' => 'stats', '_controller' => 'App\\Controller\\Users\\DashboardController::start'], null, null, null, false, false, null],
            [['_route' => 'userdashboard', '_controller' => 'App\\Controller\\Users\\DashboardUserController::start'], null, ['GET' => 0], null, false, false, null],
        ],
        '/planning' => [
            [['_route' => 'planification', '_controller' => 'App\\Controller\\Users\\PlanningController::start'], null, null, null, false, false, null],
            [['_route' => 'planning', '_controller' => 'App\\Controller\\PlanningController::start'], null, ['GET' => 0], null, false, false, null],
        ],
        '/radios' => [
            [['_route' => 'accueil', '_controller' => 'App\\Controller\\Users\\RadiosController::start'], null, null, null, false, false, null],
            [['_route' => 'radios', '_controller' => 'App\\Controller\\Users\\RadiosController::start'], null, ['GET' => 0], null, false, false, null],
        ],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/admindashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\Administrateur\\DashboardController::start'], null, ['GET' => 0], null, false, false, null]],
        '/adminuser' => [[['_route' => 'adminuser', '_controller' => 'App\\Controller\\Administrateur\\AdminUserController::home'], null, ['GET' => 0], null, false, false, null]],
        '/statistics' => [[['_route' => 'adminstatistics', '_controller' => 'App\\Controller\\Administrateur\\DashboardController::getStatistics'], null, ['GET' => 0], null, false, false, null]],
        '/settingsadmin' => [[['_route' => 'settingsadmin', '_controller' => 'App\\Controller\\Administrateur\\SettingsController::settings'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'utilisateurs', '_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::home'], null, ['GET' => 0], null, false, false, null]],
        '/listusers' => [[['_route' => 'listusers', '_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::listUsers'], null, ['GET' => 0], null, false, false, null]],
        '/signalements' => [[['_route' => 'signalements', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::home'], null, ['GET' => 0], null, false, false, null]],
        '/signalements/id' => [[['_route' => 'signalement_list', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::getUserSignal'], null, ['GET' => 0], null, false, false, null]],
        '/listSignal/id' => [[['_route' => 'listSignal', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::listReporting'], null, ['GET' => 0], null, false, false, null]],
        '/blank' => [[['_route' => 'blank', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::blankPage'], null, ['GET' => 0], null, false, false, null]],
        '/listchannels' => [[['_route' => 'listchannels', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::allchannels'], null, ['GET' => 0], null, false, false, null]],
        '/adduser' => [[['_route' => 'adduser', '_controller' => 'App\\Controller\\Administrateur\\CrudController::getUser'], null, ['GET' => 0], null, false, false, null]],
        '/newuser' => [[['_route' => 'newuser', '_controller' => 'App\\Controller\\Administrateur\\CrudController::addNewUser'], null, ['GET' => 0], null, false, false, null]],
        '/edituser/id' => [[['_route' => 'edituser', '_controller' => 'App\\Controller\\Administrateur\\CrudController::editUser'], null, ['GET' => 0], null, false, false, null]],
        '/editChannel/id' => [[['_route' => 'editChannel', '_controller' => 'App\\Controller\\Administrateur\\CrudController::editChannel'], null, ['GET' => 0], null, false, false, null]],
        '/notifications' => [[['_route' => 'notifications', '_controller' => 'App\\Controller\\Administrateur\\NotificationsController::start'], null, ['GET' => 0], null, false, false, null]],
        '/listradios' => [[['_route' => 'listradios', '_controller' => 'App\\Controller\\Users\\RadiosController::getAllRadio'], null, ['GET' => 0], null, false, false, null]],
        '/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\Users\\SettingsController::accountSetting'], null, ['GET' => 0], null, false, false, null]],
        '/musiclibrary' => [[['_route' => 'musiclibrary', '_controller' => 'App\\Controller\\Users\\MusicLibraryController::start'], null, ['GET' => 0], null, false, false, null]],
        '/timeline' => [[['_route' => 'timeline', '_controller' => 'App\\Controller\\Users\\TimelineController::start'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
