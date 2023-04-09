<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test0' => [[['_route' => 'app_test0', '_controller' => 'App\\Controller\\TestController::index2'], null, null, null, false, false, null]],
        '/test1' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index1'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\TestController::indexRegister'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/users/new2' => [[['_route' => 'app_users_new2', '_controller' => 'App\\Controller\\UsersController::newForAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:43)'
                .'|/users(?'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:74)'
                            .'|/edit(?'
                                .'|(*:89)'
                                .'|a(*:97)'
                            .')'
                            .'|(*:105)'
                        .')'
                        .'|add(*:117)'
                    .')'
                    .'|edit/([^/]++)/edit2(*:145)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:185)'
                    .'|wdt/([^/]++)(*:205)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:251)'
                            .'|router(*:265)'
                            .'|exception(?'
                                .'|(*:285)'
                                .'|\\.css(*:298)'
                            .')'
                        .')'
                        .'|(*:308)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        74 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['idUser'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'app_users_edita', '_controller' => 'App\\Controller\\UsersController::edita'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        105 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['idUser'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'app_users_add', '_controller' => 'App\\Controller\\UsersController::add'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        145 => [[['_route' => 'app_users_edit2', '_controller' => 'App\\Controller\\UsersController::editForAdmin'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        185 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        205 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        251 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        265 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        285 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        298 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        308 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
