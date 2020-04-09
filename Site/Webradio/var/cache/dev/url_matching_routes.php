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
        '/adminuser' => [[['_route' => 'adminuser.users.index', '_controller' => 'App\\Controller\\Administrateur\\AdminUserController::index'], null, null, null, false, false, null]],
        '/adminuser/channel' => [[['_route' => 'adminuser.channel.show', '_controller' => 'App\\Controller\\Administrateur\\AdminUserController::getchannel'], null, null, null, false, false, null]],
        '/adminuser/channel/edit' => [[['_route' => 'adminuser.channel.edit', '_controller' => 'App\\Controller\\Administrateur\\AdminUserController::editUser'], null, null, null, false, false, null]],
        '/admin/channel' => [[['_route' => 'admin.channel.index', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::home'], null, null, null, false, false, null]],
        '/admin/channel/userschannel' => [[['_route' => 'admin.channel.show', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::allchannels'], null, null, null, false, false, null]],
        '/admin/channel/edit' => [[['_route' => 'admin.channel.edit', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::editChannel'], null, null, null, false, false, null]],
        '/admin/channel/user' => [[['_route' => 'admin.channel.user', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::getOneUser'], null, null, null, false, false, null]],
        '/admin/adminuser' => [[['_route' => 'admin.adminuser.index', '_controller' => 'App\\Controller\\Administrateur\\CrudController::getUser'], null, null, null, false, false, null]],
        '/admin/adminuser/create' => [[['_route' => 'admin.adminuser.create', '_controller' => 'App\\Controller\\Administrateur\\CrudController::addNewUser'], null, null, null, false, false, null]],
        '/admin/user/edits' => [[['_route' => 'admin.adminuser.edit', '_controller' => 'App\\Controller\\Administrateur\\CrudController::editUser'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.dashboard.index', '_controller' => 'App\\Controller\\Administrateur\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/stats' => [[['_route' => 'admin.stats.show', '_controller' => 'App\\Controller\\Administrateur\\DashboardController::getStatistics'], null, null, null, false, false, null]],
        '/admin/notification' => [[['_route' => 'admin.notifications.index', '_controller' => 'App\\Controller\\Administrateur\\NotificationsController::index'], null, null, null, false, false, null]],
        '/admin/setting' => [[['_route' => 'admin.setting.index', '_controller' => 'App\\Controller\\Administrateur\\SettingsController::index'], null, null, null, false, false, null]],
        '/admin/signalement' => [[['_route' => 'admin.signalement.index', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::index'], null, null, null, false, false, null]],
        '/admin/signalement/users' => [[['_route' => 'admin.signalement.show', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::getUserSignal'], null, null, null, false, false, null]],
        '/admin/signalement/listreporting' => [[['_route' => 'admin.signalement.listreporting', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::listReporting'], null, ['GET' => 0], null, false, false, null]],
        '/admin/signalement/blankpage' => [[['_route' => 'admin.signalement.blankpage', '_controller' => 'App\\Controller\\Administrateur\\SignalementsController::blankPage'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin.users.index', '_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin.users.show', '_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::listUsers'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile.index', '_controller' => 'App\\Controller\\Users\\AdminUserController::index'], null, null, null, false, false, null]],
        '/profile/banni' => [[['_route' => 'profile.banni', '_controller' => 'App\\Controller\\Users\\AdminUserController::getUser'], null, null, null, false, false, null]],
        '/profile/page' => [[['_route' => 'profile.page', '_controller' => 'App\\Controller\\Users\\AdminUserController::messagePage'], null, null, null, false, false, null]],
        '/profile/library' => [[['_route' => 'profile.library.index', '_controller' => 'App\\Controller\\Users\\MusicLibraryController::index'], null, null, null, false, false, null]],
        '/profile/planning' => [
            [['_route' => 'profile.planning.index', '_controller' => 'App\\Controller\\Users\\PlanningController::index'], null, null, null, false, false, null],
            [['_route' => 'profile.planning.nextMonth', '_controller' => 'App\\Controller\\Users\\PlanningController::nextMonth'], null, null, null, false, false, null],
        ],
        '/profile/planning/edit' => [[['_route' => 'profile.planning.edit', '_controller' => 'App\\Controller\\Users\\PlanningController::edit'], null, null, null, false, false, null]],
        '/profile/planning/delete' => [[['_route' => 'profile.planning.delete', '_controller' => 'App\\Controller\\Users\\PlanningController::delete'], null, null, null, false, false, null]],
        '/profile/radio' => [[['_route' => 'profile.radios.index', '_controller' => 'App\\Controller\\Users\\RadiosController::index'], null, null, null, false, false, null]],
        '/profile/radios' => [[['_route' => 'profile.radios.show', '_controller' => 'App\\Controller\\Users\\RadiosController::getAllRadio'], null, null, null, false, false, null]],
        '/profile/banni/radios' => [[['_route' => 'profile.banni.radios', '_controller' => 'App\\Controller\\Users\\RadiosController::startHome'], null, null, null, false, false, null]],
        '/profile/setting' => [[['_route' => 'profile.setting.index', '_controller' => 'App\\Controller\\Users\\SettingsController::index'], null, null, null, false, false, null]],
        '/profile/setting/show' => [[['_route' => 'profile.setting.show', '_controller' => 'App\\Controller\\Users\\SettingsController::showUser'], null, null, null, false, false, null]],
        '/profile/save' => [[['_route' => 'profile.save.index', '_controller' => 'App\\Controller\\Users\\TimelineController::index'], null, null, null, false, false, null]],
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
                .'|/admin(?'
                    .'|user/channel/([^/]++)(*:199)'
                    .'|/(?'
                        .'|channel/([^/]++)(*:227)'
                        .'|notification/([^/]++)(*:256)'
                        .'|setting/([^/]++)(*:280)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'adminuser.channel.remove', '_controller' => 'App\\Controller\\Administrateur\\AdminUserController::removeUser'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'admin.channel.remove', '_controller' => 'App\\Controller\\Administrateur\\ChainesController::removeChannel'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'admin.notifications.sendnotif', '_controller' => 'App\\Controller\\Administrateur\\NotificationsController::sendNotif'], ['id'], null, null, false, true, null]],
        280 => [
            [['_route' => 'admin.setting.edit', '_controller' => 'App\\Controller\\Administrateur\\SettingsController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
