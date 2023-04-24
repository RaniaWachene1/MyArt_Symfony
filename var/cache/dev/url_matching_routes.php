<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/articles' => [[['_route' => 'app_articles_index', '_controller' => 'App\\Controller\\ArticlesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articles/indexadmin' => [[['_route' => 'app_articles_indexadmin', '_controller' => 'App\\Controller\\ArticlesController::indexadmin'], null, ['GET' => 0], null, false, false, null]],
        '/articles/indexfront' => [[['_route' => 'app_articles_indexfront', '_controller' => 'App\\Controller\\ArticlesController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/articles/new' => [[['_route' => 'app_articles_new', '_controller' => 'App\\Controller\\ArticlesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/galeries' => [[['_route' => 'app_galeries_index', '_controller' => 'App\\Controller\\GaleriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/galeries/new' => [[['_route' => 'app_galeries_new', '_controller' => 'App\\Controller\\GaleriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclam' => [[['_route' => 'app_reclam_index', '_controller' => 'App\\Controller\\ReclamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclam/myclaims' => [[['_route' => 'app_reclam_index2', '_controller' => 'App\\Controller\\ReclamController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/reclam/new' => [[['_route' => 'app_reclam_new', '_controller' => 'App\\Controller\\ReclamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclam/claim/stats' => [[['_route' => 'app_reclam_stats', '_controller' => 'App\\Controller\\ReclamController::statistics'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verifytemplate' => [[['_route' => 'app_verify', '_controller' => 'App\\Controller\\RegistrationController::verify'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\SecurityController::loginCheck'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_test0', '_controller' => 'App\\Controller\\TestController::index2'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index1'], null, null, null, false, false, null]],
        '/artist' => [[['_route' => 'app_test3', '_controller' => 'App\\Controller\\TestController::indexartist'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app-cart', '_controller' => 'App\\Controller\\TestController::cart'], null, null, null, false, false, null]],
        '/typereclamation' => [[['_route' => 'app_typereclamation_index', '_controller' => 'App\\Controller\\TypereclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/typereclamation/new' => [[['_route' => 'app_typereclamation_new', '_controller' => 'App\\Controller\\TypereclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/users/new2' => [[['_route' => 'app_users_new2', '_controller' => 'App\\Controller\\UsersController::newForAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users/gender/stats' => [[['_route' => 'app_users_stats', '_controller' => 'App\\Controller\\UsersController::usersBySexeChartAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/articles/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|quick\\-view(*:46)'
                            .'|admin(*:58)'
                            .'|edit(*:69)'
                        .')'
                        .'|(*:77)'
                    .')'
                    .'|article(?'
                        .'|/([^/]++)/rate(*:109)'
                        .'|s/([^/]++)/pdf(*:131)'
                    .')'
                .')'
                .'|/commentaire/([^/]++)(?'
                    .'|(*:165)'
                    .'|/edit(*:178)'
                    .'|(*:186)'
                .')'
                .'|/galeries/(?'
                    .'|([^/]++)(?'
                        .'|(*:219)'
                        .'|/edit(*:232)'
                    .')'
                    .'|affect/([^/]++)(*:256)'
                    .'|([^/]++)(*:272)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:303)'
                        .'|/edit(*:316)'
                        .'|(*:324)'
                    .')'
                    .'|e(?'
                        .'|clam/(?'
                            .'|([^/]++)(*:353)'
                            .'|show2/([^/]++)(*:375)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|edit(?'
                                        .'|2(*:406)'
                                        .'|(*:414)'
                                    .')'
                                    .'|pdf(*:426)'
                                .')'
                                .'|(*:435)'
                            .')'
                        .')'
                        .'|ponse/([^/]++)/new(*:463)'
                        .'|set\\-password/reset(?:/([^/]++))?(*:504)'
                    .')'
                .')'
                .'|/typereclamation/([^/]++)(?'
                    .'|(*:542)'
                    .'|/edit(*:555)'
                    .'|(*:563)'
                .')'
                .'|/users(?'
                    .'|/([^/]++)(?'
                        .'|(*:593)'
                        .'|/edit(*:606)'
                    .')'
                    .'|edit/([^/]++)/edit2(*:634)'
                    .'|([^/]++)/edit3(*:656)'
                    .'|/([^/]++)(?'
                        .'|(*:676)'
                        .'|/(?'
                            .'|block(*:693)'
                            .'|unblock(*:708)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:750)'
                    .'|wdt/([^/]++)(*:770)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:816)'
                            .'|router(*:830)'
                            .'|exception(?'
                                .'|(*:850)'
                                .'|\\.css(*:863)'
                            .')'
                        .')'
                        .'|(*:873)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'app_articles_quick_view', '_controller' => 'App\\Controller\\ArticlesController::quickView'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        58 => [[['_route' => 'app_articles_showadmin', '_controller' => 'App\\Controller\\ArticlesController::showadmin'], ['idArticle'], ['GET' => 0], null, false, false, null]],
        69 => [[['_route' => 'app_articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['idArticle'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        77 => [
            [['_route' => 'app_articles_show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['idArticle'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['idArticle'], ['POST' => 0], null, false, true, null],
        ],
        109 => [[['_route' => 'article_rate', '_controller' => 'App\\Controller\\ArticlesController::rate'], ['id'], null, null, false, false, null]],
        131 => [[['_route' => 'articles_pdf', '_controller' => 'App\\Controller\\ArticlesController::pdf'], ['id'], null, null, false, false, null]],
        165 => [
            [['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commentaire', '_controller' => 'App\\Controller\\CommentaireController::showR'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        178 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        186 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        219 => [[['_route' => 'app_galeries_show', '_controller' => 'App\\Controller\\GaleriesController::show'], ['idGalerie'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_galeries_edit', '_controller' => 'App\\Controller\\GaleriesController::edit'], ['idGalerie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'app_galeries_delete1', '_controller' => 'App\\Controller\\GaleriesController::delete1'], ['idGalerie'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        272 => [[['_route' => 'app_galeries_delete', '_controller' => 'App\\Controller\\GaleriesController::delete'], ['idGalerie'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idRating'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idRating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idRating'], ['POST' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_reclam_show', '_controller' => 'App\\Controller\\ReclamController::show'], ['idr'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_reclam_show2', '_controller' => 'App\\Controller\\ReclamController::show2'], ['idr'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_reclam_edit2', '_controller' => 'App\\Controller\\ReclamController::edit2'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'app_reclam_edit', '_controller' => 'App\\Controller\\ReclamController::edit'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [[['_route' => 'app_reclam_pdf', '_controller' => 'App\\Controller\\ReclamController::pdf'], ['idr'], null, null, false, false, null]],
        435 => [[['_route' => 'app_reclam_delete', '_controller' => 'App\\Controller\\ReclamController::delete'], ['idr'], ['POST' => 0], null, false, true, null]],
        463 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        504 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        542 => [[['_route' => 'app_typereclamation_show', '_controller' => 'App\\Controller\\TypereclamationController::show'], ['idtr'], ['GET' => 0], null, false, true, null]],
        555 => [[['_route' => 'app_typereclamation_edit', '_controller' => 'App\\Controller\\TypereclamationController::edit'], ['idtr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        563 => [[['_route' => 'app_typereclamation_delete', '_controller' => 'App\\Controller\\TypereclamationController::delete'], ['idtr'], ['POST' => 0], null, false, true, null]],
        593 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        606 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        634 => [[['_route' => 'app_users_edit2', '_controller' => 'App\\Controller\\UsersController::editForAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        656 => [[['_route' => 'app_users_edit3', '_controller' => 'App\\Controller\\UsersController::editAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        676 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        693 => [[['_route' => 'app_users_block', '_controller' => 'App\\Controller\\UsersController::block'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        708 => [[['_route' => 'app_users_unblock', '_controller' => 'App\\Controller\\UsersController::unblock'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        750 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        770 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        816 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        830 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        850 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        863 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        873 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
