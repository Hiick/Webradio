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
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
    'radio.index' => [[], ['_controller' => 'App\\Controller\\RadioController::index'], [], [['text', '/radio/']], [], []],
    'radio.show' => [['id'], ['_controller' => 'App\\Controller\\RadioController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/radio']], [], []],
    'profile.library.index' => [[], ['_controller' => 'App\\Controller\\Users\\MusicLibraryController::index'], [], [['text', '/profile/library']], [], []],
    'profile.planning.index' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::index'], [], [['text', '/profile/planning']], [], []],
    'profile.planning.edit' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::edit'], [], [['text', '/profile/planning/edit']], [], []],
    'profile.planning.delete' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::delete'], [], [['text', '/profile/planning/delete']], [], []],
    'profile.planning.nextMonth' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::nextMonth'], [], [['text', '/profile/planning/next']], [], []],
    'profile.planning.previousMonth' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::previousMonth'], [], [['text', '/profile/planning/previousMonth']], [], []],
    'profile.setting.index' => [[], ['_controller' => 'App\\Controller\\Users\\SettingsController::index'], [], [['text', '/profile/setting']], [], []],
    'profile.setting.show' => [[], ['_controller' => 'App\\Controller\\Users\\SettingsController::showUser'], [], [['text', '/profile/setting/show']], [], []],
    'profile.timeline.index' => [[], ['_controller' => 'App\\Controller\\Users\\TimelineController::index'], [], [['text', '/profile/timeline']], [], []],
    'profile.index' => [[], ['_controller' => 'App\\Controller\\Users\\UserController::index'], [], [['text', '/profile']], [], []],
    'superadmin.channel.index' => [[], ['_controller' => 'App\\Controller\\superAdmin\\ChannelAdminController::index'], [], [['text', '/superadmin/channel/']], [], []],
    'superadmin.Signalements.index' => [[], ['_controller' => 'App\\Controller\\superAdmin\\SignalAdminController::index'], [], [['text', '/superadmin/signal/']], [], []],
    'superadmin.index' => [[], ['_controller' => 'App\\Controller\\superAdmin\\SuperAdminDashController::index'], [], [['text', '/superadmin']], [], []],
    'superadmin.stats.show' => [[], ['_controller' => 'App\\Controller\\superAdmin\\SuperAdminDashController::getStatistics'], [], [['text', '/superadmin/stats']], [], []],
    'superadmin.users.index' => [[], ['_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::index'], [], [['text', '/superadmin/users/']], [], []],
    'superadmin.users.new' => [[], ['_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::new'], [], [['text', '/superadmin/users/new']], [], []],
    'superadmin.users.edit' => [['id'], ['_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/superadmin/users']], [], []],
    'superadmin.users.delete' => [['id'], ['_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/superadmin/users']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
