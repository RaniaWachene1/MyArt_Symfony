<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/article' => [[['_route' => 'app_article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles_index', '_controller' => 'App\\Controller\\ArticlesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articles/indexadmin' => [[['_route' => 'app_articles_indexadmin', '_controller' => 'App\\Controller\\ArticlesController::indexadmin'], null, ['GET' => 0], null, false, false, null]],
        '/articles/indexfront' => [[['_route' => 'app_articles_indexfront', '_controller' => 'App\\Controller\\ArticlesController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/articles/cart' => [[['_route' => 'app_articles_cart', '_controller' => 'App\\Controller\\ArticlesController::viewCart'], null, ['GET' => 0], null, false, false, null]],
        '/articles/new' => [[['_route' => 'app_articles_new', '_controller' => 'App\\Controller\\ArticlesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/galeries' => [[['_route' => 'app_galeries_index', '_controller' => 'App\\Controller\\GaleriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/galeries/new' => [[['_route' => 'app_galeries_new', '_controller' => 'App\\Controller\\GaleriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/panier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclam' => [[['_route' => 'app_reclam_index', '_controller' => 'App\\Controller\\ReclamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclam/myclaims' => [[['_route' => 'app_reclam_index2', '_controller' => 'App\\Controller\\ReclamController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/reclam/new' => [[['_route' => 'app_reclam_new', '_controller' => 'App\\Controller\\ReclamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verifytemplate' => [[['_route' => 'app_verify', '_controller' => 'App\\Controller\\RegistrationController::verify'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\SecurityController::loginCheck'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'app_stats', '_controller' => 'App\\Controller\\StatsController::stats'], null, null, null, true, false, null]],
        '/statsartist' => [[['_route' => 'app_stats_artist', '_controller' => 'App\\Controller\\StatsController::statsartist'], null, null, null, true, false, null]],
        '/back' => [[['_route' => 'app_test0', '_controller' => 'App\\Controller\\TestController::index2'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index1'], null, null, null, false, false, null]],
        '/artist' => [[['_route' => 'app_test3', '_controller' => 'App\\Controller\\TestController::indexartist'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app-cart', '_controller' => 'App\\Controller\\TestController::cart'], null, null, null, false, false, null]],
        '/typereclamation' => [[['_route' => 'app_typereclamation_index', '_controller' => 'App\\Controller\\TypereclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/typereclamation/new' => [[['_route' => 'app_typereclamation_new', '_controller' => 'App\\Controller\\TypereclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/articles/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(?'
                                .'|comment/([^/]++)(*:58)'
                                .'|(*:65)'
                            .')'
                            .'|quick\\-view(*:84)'
                            .'|admin(*:96)'
                        .')'
                        .'|(*:104)'
                    .')'
                    .'|cart/([^/]++)/pdfcart(*:134)'
                    .'|([^/]++)/pdf(*:154)'
                .')'
                .'|/commentaire/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                .')'
                .'|/galeries/(?'
                    .'|([^/]++)(?'
                        .'|(*:233)'
                        .'|/edit(*:246)'
                    .')'
                    .'|affect/([^/]++)(*:270)'
                    .'|([^/]++)(*:286)'
                .')'
                .'|/panier/([^/]++)(?'
                    .'|(*:314)'
                    .'|/edit(*:327)'
                    .'|(*:335)'
                .')'
                .'|/r(?'
                    .'|ating/(?'
                        .'|([^/]++)(?'
                            .'|(*:369)'
                            .'|/edit(*:382)'
                            .'|(*:390)'
                        .')'
                        .'|article/([^/]++)(*:415)'
                    .')'
                    .'|e(?'
                        .'|clam/(?'
                            .'|([^/]++)(*:444)'
                            .'|s(?'
                                .'|how2/([^/]++)(*:469)'
                                .'|atisfied/([^/]++)/([^/]++)(*:503)'
                            .')'
                            .'|unsatisfied/([^/]++)/([^/]++)(*:541)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|edit(?'
                                        .'|2(*:572)'
                                        .'|(*:580)'
                                    .')'
                                    .'|pdf(*:592)'
                                .')'
                                .'|(*:601)'
                            .')'
                        .')'
                        .'|ponse/([^/]++)/(?'
                            .'|new(*:632)'
                            .'|edit/([^/]++)(*:653)'
                        .')'
                        .'|set\\-password/reset(?:/([^/]++))?(*:695)'
                    .')'
                .')'
                .'|/typereclamation/([^/]++)(?'
                    .'|(*:733)'
                    .'|/edit(*:746)'
                    .'|(*:754)'
                .')'
                .'|/users(?'
                    .'|/([^/]++)(?'
                        .'|(*:784)'
                        .'|/edit(*:797)'
                    .')'
                    .'|edit/([^/]++)/edit2(*:825)'
                    .'|([^/]++)/edit3(*:847)'
                    .'|/([^/]++)(?'
                        .'|(*:867)'
                        .'|/(?'
                            .'|block(*:884)'
                            .'|unblock(*:899)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:941)'
                    .'|wdt/([^/]++)(*:961)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1007)'
                            .'|router(*:1022)'
                            .'|exception(?'
                                .'|(*:1043)'
                                .'|\\.css(*:1057)'
                            .')'
                        .')'
                        .'|(*:1068)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        58 => [[['_route' => 'app_articles_editcomment', '_controller' => 'App\\Controller\\ArticlesController::editComment'], ['id', 'idc'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        65 => [[['_route' => 'app_articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['idArticle'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_articles_quick_view', '_controller' => 'App\\Controller\\ArticlesController::quickView'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'app_articles_showadmin', '_controller' => 'App\\Controller\\ArticlesController::showadmin'], ['idArticle'], ['GET' => 0], null, false, false, null]],
        104 => [
            [['_route' => 'app_articles_show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['idArticle'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['idArticle'], ['POST' => 0], null, false, true, null],
        ],
        134 => [[['_route' => 'app_articles_pdfcart', '_controller' => 'App\\Controller\\ArticlesController::pdfcart'], ['id'], null, null, false, false, null]],
        154 => [[['_route' => 'app_articles_pdf', '_controller' => 'App\\Controller\\ArticlesController::pdf'], ['id'], null, null, false, false, null]],
        187 => [
            [['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commentaire', '_controller' => 'App\\Controller\\CommentaireController::showR'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0, 'GET' => 1, 'DELETE' => 2], null, false, true, null],
        ],
        200 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        233 => [[['_route' => 'app_galeries_show', '_controller' => 'App\\Controller\\GaleriesController::show'], ['idGalerie'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_galeries_edit', '_controller' => 'App\\Controller\\GaleriesController::edit'], ['idGalerie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        270 => [[['_route' => 'app_galeries_delete1', '_controller' => 'App\\Controller\\GaleriesController::delete1'], ['idGalerie'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        286 => [[['_route' => 'app_galeries_delete', '_controller' => 'App\\Controller\\GaleriesController::delete'], ['idGalerie'], ['POST' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idPanier'], ['GET' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['idPanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['idPanier'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idRating'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idRating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        390 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idRating'], ['POST' => 0], null, false, true, null]],
        415 => [[['_route' => 'app_rating_article', '_controller' => 'App\\Controller\\RatingController::rateArticle'], ['articleId'], ['POST' => 0], null, false, true, null]],
        444 => [[['_route' => 'app_reclam_show', '_controller' => 'App\\Controller\\ReclamController::show'], ['idr'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_reclam_show2', '_controller' => 'App\\Controller\\ReclamController::show2'], ['idr'], ['GET' => 0], null, false, true, null]],
        503 => [[['_route' => 'app_reclam_satisfied', '_controller' => 'App\\Controller\\ReclamController::satistied'], ['idr', 'idrep'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        541 => [[['_route' => 'app_reclam_unsatisfied', '_controller' => 'App\\Controller\\ReclamController::unsatistied'], ['idr', 'idrep'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        572 => [[['_route' => 'app_reclam_edit2', '_controller' => 'App\\Controller\\ReclamController::edit2'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        580 => [[['_route' => 'app_reclam_edit', '_controller' => 'App\\Controller\\ReclamController::edit'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        592 => [[['_route' => 'app_reclam_pdf', '_controller' => 'App\\Controller\\ReclamController::pdf'], ['idr'], null, null, false, false, null]],
        601 => [[['_route' => 'app_reclam_delete', '_controller' => 'App\\Controller\\ReclamController::delete'], ['idr'], ['POST' => 0], null, false, true, null]],
        632 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        653 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idr', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        695 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        733 => [[['_route' => 'app_typereclamation_show', '_controller' => 'App\\Controller\\TypereclamationController::show'], ['idtr'], ['GET' => 0], null, false, true, null]],
        746 => [[['_route' => 'app_typereclamation_edit', '_controller' => 'App\\Controller\\TypereclamationController::edit'], ['idtr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        754 => [[['_route' => 'app_typereclamation_delete', '_controller' => 'App\\Controller\\TypereclamationController::delete'], ['idtr'], ['POST' => 0], null, false, true, null]],
        784 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        797 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        825 => [[['_route' => 'app_users_edit2', '_controller' => 'App\\Controller\\UsersController::editForAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        847 => [[['_route' => 'app_users_edit3', '_controller' => 'App\\Controller\\UsersController::editAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        867 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        884 => [[['_route' => 'app_users_block', '_controller' => 'App\\Controller\\UsersController::block'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        899 => [[['_route' => 'app_users_unblock', '_controller' => 'App\\Controller\\UsersController::unblock'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        941 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        961 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1007 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1022 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1043 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1057 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1068 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
