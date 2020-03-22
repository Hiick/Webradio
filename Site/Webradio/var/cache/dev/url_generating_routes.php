<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'Chaines' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::home'], [], [['text', '/chaines']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/home']], [], []],
    'stats' => [[], ['_controller' => 'App\\Controller\\Users\\DashboardController::start'], [], [['text', '/userdashboard']], [], []],
    'planification' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::start'], [], [['text', '/planning']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\Users\\RadiosController::start'], [], [['text', '/radios']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/login']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\Administrateur\\DashboardController::start'], [], [['text', '/admindashboard']], [], []],
    'adminuser' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminUserController::home'], [], [['text', '/adminuser']], [], []],
    'adminstatistics' => [[], ['_controller' => 'App\\Controller\\Administrateur\\DashboardController::getStatistics'], [], [['text', '/statistics']], [], []],
    'settingsadmin' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SettingsController::settings'], [], [['text', '/settingsadmin']], [], []],
    'utilisateurs' => [[], ['_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::home'], [], [['text', '/utilisateurs']], [], []],
    'listusers' => [[], ['_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::listUsers'], [], [['text', '/listusers']], [], []],
    'signalements' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::home'], [], [['text', '/signalements']], [], []],
    'signalement_list' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::getUserSignal'], [], [['text', '/signalements/id']], [], []],
    'listSignal' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::listReporting'], [], [['text', '/listSignal/id']], [], []],
    'blank' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::blankPage'], [], [['text', '/blank']], [], []],
    'chaines' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::home'], [], [['text', '/chaines']], [], []],
    'listchannels' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::allchannels'], [], [['text', '/listchannels']], [], []],
    'adduser' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::getUser'], [], [['text', '/adduser']], [], []],
    'newuser' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::addNewUser'], [], [['text', '/newuser']], [], []],
    'edituser' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::editUser'], [], [['text', '/edituser/id']], [], []],
    'editChannel' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::editChannel'], [], [['text', '/editChannel/id']], [], []],
    'notifications' => [[], ['_controller' => 'App\\Controller\\Administrateur\\NotificationsController::start'], [], [['text', '/notifications']], [], []],
    'userdashboard' => [[], ['_controller' => 'App\\Controller\\Users\\DashboardUserController::start'], [], [['text', '/userdashboard']], [], []],
    'planning' => [[], ['_controller' => 'App\\Controller\\PlanningController::start'], [], [['text', '/planning']], [], []],
    'radios' => [[], ['_controller' => 'App\\Controller\\Users\\RadiosController::start'], [], [['text', '/radios']], [], []],
    'listradios' => [[], ['_controller' => 'App\\Controller\\Users\\RadiosController::getAllRadio'], [], [['text', '/listradios']], [], []],
    'settings' => [[], ['_controller' => 'App\\Controller\\Users\\SettingsController::accountSetting'], [], [['text', '/settings']], [], []],
    'musiclibrary' => [[], ['_controller' => 'App\\Controller\\Users\\MusicLibraryController::start'], [], [['text', '/musiclibrary']], [], []],
    'timeline' => [[], ['_controller' => 'App\\Controller\\Users\\TimelineController::start'], [], [['text', '/timeline']], [], []],
];
