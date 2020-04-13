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
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/radio' => [[['_route' => 'radio.index', '_controller' => 'App\\Controller\\RadioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profile/library' => [[['_route' => 'profile.library.index', '_controller' => 'App\\Controller\\Users\\MusicLibraryController::index'], null, null, null, false, false, null]],
        '/profile/planning' => [[['_route' => 'profile.planning.index', '_controller' => 'App\\Controller\\Users\\PlanningController::index'], null, null, null, false, false, null]],
        '/profile/planning/edit' => [[['_route' => 'profile.planning.edit', '_controller' => 'App\\Controller\\Users\\PlanningController::edit'], null, null, null, false, false, null]],
        '/profile/planning/delete' => [[['_route' => 'profile.planning.delete', '_controller' => 'App\\Controller\\Users\\PlanningController::delete'], null, null, null, false, false, null]],
        '/profile/planning/next' => [[['_route' => 'profile.planning.nextMonth', '_controller' => 'App\\Controller\\Users\\PlanningController::nextMonth'], null, null, null, false, false, null]],
        '/profile/planning/previousMonth' => [[['_route' => 'profile.planning.previousMonth', '_controller' => 'App\\Controller\\Users\\PlanningController::previousMonth'], null, null, null, false, false, null]],
        '/profile/setting' => [[['_route' => 'profile.setting.index', '_controller' => 'App\\Controller\\Users\\SettingsController::index'], null, null, null, false, false, null]],
        '/profile/setting/show' => [[['_route' => 'profile.setting.show', '_controller' => 'App\\Controller\\Users\\SettingsController::showUser'], null, null, null, false, false, null]],
        '/profile/timeline' => [[['_route' => 'profile.timeline.index', '_controller' => 'App\\Controller\\Users\\TimelineController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile.index', '_controller' => 'App\\Controller\\Users\\UserController::index'], null, null, null, false, false, null]],
        '/superadmin/channel' => [[['_route' => 'superadmin.channel.index', '_controller' => 'App\\Controller\\superAdmin\\ChannelAdminController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/superadmin' => [[['_route' => 'superadmin.index', '_controller' => 'App\\Controller\\superAdmin\\SuperAdminDashController::index'], null, null, null, false, false, null]],
        '/superadmin/stats' => [[['_route' => 'superadmin.stats.show', '_controller' => 'App\\Controller\\superAdmin\\SuperAdminDashController::getStatistics'], null, null, null, false, false, null]],
        '/superadmin/users' => [[['_route' => 'superadmin.users.index', '_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/superadmin/users/new' => [[['_route' => 'superadmin.users.new', '_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                .'|/radio/([^/]++)(*:184)'
                .'|/superadmin/users/([^/]++)(?'
                    .'|/edit(*:226)'
                    .'|(*:234)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        184 => [[['_route' => 'radio.show', '_controller' => 'App\\Controller\\RadioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'superadmin.users.edit', '_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [
            [['_route' => 'superadmin.users.delete', '_controller' => 'App\\Controller\\superAdmin\\UsersAdminController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
