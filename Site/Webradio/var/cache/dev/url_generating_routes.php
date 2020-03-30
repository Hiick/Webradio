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
    'adminuser.users.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminUserController::index'], [], [['text', '/adminuser']], [], []],
    'adminuser.channel.show' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminUserController::getchannel'], [], [['text', '/adminuser/channel']], [], []],
    'adminuser.channel.edit' => [[], ['_controller' => 'App\\Controller\\Administrateur\\AdminUserController::editUser'], [], [['text', '/adminuser/channel/edit']], [], []],
    'adminuser.channel.remove' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\AdminUserController::removeUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adminuser/channel']], [], []],
    'admin.channel.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::home'], [], [['text', '/admin/channel']], [], []],
    'admin.channel.show' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::allchannels'], [], [['text', '/admin/channel/userschannel']], [], []],
    'admin.channel.edit' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::editChannel'], [], [['text', '/admin/channel/edit']], [], []],
    'admin.channel.user' => [[], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::getOneUser'], [], [['text', '/admin/channel/user']], [], []],
    'admin.channel.remove' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\ChainesController::removeChannel'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/channel']], [], []],
    'admin.adminuser.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::getUser'], [], [['text', '/admin/adminuser']], [], []],
    'admin.adminuser.create' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::addNewUser'], [], [['text', '/admin/adminuser/create']], [], []],
    'admin.adminuser.edit' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CrudController::editUser'], [], [['text', '/admin/user/edits']], [], []],
    'admin.dashboard.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'admin.stats.show' => [[], ['_controller' => 'App\\Controller\\Administrateur\\DashboardController::getStatistics'], [], [['text', '/admin/stats']], [], []],
    'admin.notifications.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\NotificationsController::index'], [], [['text', '/admin/notification']], [], []],
    'admin.notifications.sendnotif' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\NotificationsController::sendNotif'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/notification']], [], []],
    'admin.setting.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SettingsController::index'], [], [['text', '/admin/setting']], [], []],
    'admin.setting.edit' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\SettingsController::editUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/setting']], [], []],
    'admin.signalement.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::index'], [], [['text', '/admin/signalement']], [], []],
    'admin.signalement.show' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::getUserSignal'], [], [['text', '/admin/signalement/users']], [], []],
    'admin.signalement.listreporting' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::listReporting'], [], [['text', '/admin/signalement/listreporting']], [], []],
    'admin.signalement.blankpage' => [[], ['_controller' => 'App\\Controller\\Administrateur\\SignalementsController::blankPage'], [], [['text', '/admin/signalement/blankpage']], [], []],
    'admin.users.index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::index'], [], [['text', '/admin/user']], [], []],
    'admin.users.show' => [[], ['_controller' => 'App\\Controller\\Administrateur\\UtilisateursController::listUsers'], [], [['text', '/admin/users']], [], []],
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
    'profile.index' => [[], ['_controller' => 'App\\Controller\\Users\\DashboardController::index'], [], [['text', '/profile']], [], []],
    'profile.library.index' => [[], ['_controller' => 'App\\Controller\\Users\\MusicLibraryController::index'], [], [['text', '/profile/library']], [], []],
    'profile.planning.index' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::index'], [], [['text', '/profile/planning']], [], []],
    'profile.planning.edit' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::edit'], [], [['text', '/profile/planning/edit']], [], []],
    'profile.planning.delete' => [[], ['_controller' => 'App\\Controller\\Users\\PlanningController::delete'], [], [['text', '/profile/planning/delete']], [], []],
    'profile.radios.index' => [[], ['_controller' => 'App\\Controller\\Users\\RadiosController::start'], [], [['text', '/profile/radio']], [], []],
    'profile.radios.show' => [[], ['_controller' => 'App\\Controller\\Users\\RadiosController::getAllRadio'], [], [['text', '/profile/radios']], [], []],
    'profile.setting.index' => [[], ['_controller' => 'App\\Controller\\Users\\SettingsController::index'], [], [['text', '/profile/setting']], [], []],
    'profile.setting.show' => [[], ['_controller' => 'App\\Controller\\Users\\SettingsController::showUser'], [], [['text', '/profile/setting/show']], [], []],
    'profile.save.index' => [[], ['_controller' => 'App\\Controller\\Users\\TimelineController::index'], [], [['text', '/profile/save']], [], []],
];
