<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/Accueil']], [], []],
    'commande_index_back' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/Dashboard/commande']], [], []],
    'commande_new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/Dashboard/commande/new']], [], []],
    'commande_edit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/Dashboard/commande']], [], []],
    'commande_delete' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/Dashboard/commande']], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/Dashboard']], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\UserController::inscription'], [], [['text', '/inscription']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
    'base_front_connecte' => [[], ['_controller' => 'App\\Controller\\UserController::base_front_connecte'], [], [['text', '/base_front_connecte']], [], []],
    'check' => [[], ['_controller' => 'App\\Controller\\UserController::check'], [], [['text', '/check']], [], []],
    'motDePasseOubliee' => [[], ['_controller' => 'App\\Controller\\UserController::motDePasseOubliee'], [], [['text', '/motDePasseOublie']], [], []],
    'resetPassword' => [['token'], ['_controller' => 'App\\Controller\\UserController::resetPassword'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/resetPassword']], [], []],
    'userBack' => [[], ['_controller' => 'App\\Controller\\UserController::index2'], [], [['text', '/Dashboard/Users']], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/Dashboard/Users/new']], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/Dashboard/Users/edit']], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/Dashboard/Users']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/Dashboard/profile']], [], []],
    'app_user_edit_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::editProfile'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/Dashboard/profile/edit']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], []],
];
