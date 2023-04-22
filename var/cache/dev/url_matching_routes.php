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
        '/back' => [[['_route' => 'app_test0', '_controller' => 'App\\Controller\\TestController::index2'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index1'], null, null, null, false, false, null]],
        '/artist' => [[['_route' => 'app_test3', '_controller' => 'App\\Controller\\TestController::indexartist'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app-cart', '_controller' => 'App\\Controller\\TestController::cart'], null, null, null, false, false, null]],
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
                            .'|edit(*:57)'
                        .')'
                        .'|(*:65)'
                    .')'
                    .'|article/([^/]++)/rate(*:94)'
                    .'|([^/]++)/pdf(*:113)'
                .')'
                .'|/commentaire/([^/]++)(?'
                    .'|(*:146)'
                    .'|/edit(*:159)'
                    .'|(*:167)'
                .')'
                .'|/galeries/(?'
                    .'|([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                    .')'
                    .'|affect/([^/]++)(*:237)'
                    .'|([^/]++)(*:253)'
                .')'
                .'|/rating/([^/]++)(?'
                    .'|(*:281)'
                    .'|/edit(*:294)'
                    .'|(*:302)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:342)'
                    .'|wdt/([^/]++)(*:362)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:408)'
                            .'|router(*:422)'
                            .'|exception(?'
                                .'|(*:442)'
                                .'|\\.css(*:455)'
                            .')'
                        .')'
                        .'|(*:465)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'app_articles_quick_view', '_controller' => 'App\\Controller\\ArticlesController::quickView'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['idArticle'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        65 => [
            [['_route' => 'app_articles_show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['idArticle'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['idArticle'], ['POST' => 0], null, false, true, null],
        ],
        94 => [[['_route' => 'article_rate', '_controller' => 'App\\Controller\\ArticlesController::rate'], ['id'], null, null, false, false, null]],
        113 => [[['_route' => 'articles_pdf', '_controller' => 'App\\Controller\\ArticlesController::pdf'], ['id'], null, null, false, false, null]],
        146 => [
            [['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commentaire', '_controller' => 'App\\Controller\\CommentaireController::showR'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        159 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        167 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        200 => [[['_route' => 'app_galeries_show', '_controller' => 'App\\Controller\\GaleriesController::show'], ['idGalerie'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_galeries_edit', '_controller' => 'App\\Controller\\GaleriesController::edit'], ['idGalerie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'app_galeries_delete1', '_controller' => 'App\\Controller\\GaleriesController::delete1'], ['idGalerie'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        253 => [[['_route' => 'app_galeries_delete', '_controller' => 'App\\Controller\\GaleriesController::delete'], ['idGalerie'], ['POST' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idRating'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idRating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idRating'], ['POST' => 0], null, false, true, null]],
        342 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        362 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        408 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        422 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        442 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        455 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        465 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
