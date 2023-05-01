<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_articles_index' => [[], ['_controller' => 'App\\Controller\\ArticlesController::index'], [], [['text', '/articles/']], [], [], []],
    'app_articles_indexadmin' => [[], ['_controller' => 'App\\Controller\\ArticlesController::indexadmin'], [], [['text', '/articles/indexadmin']], [], [], []],
    'app_articles_indexfront' => [[], ['_controller' => 'App\\Controller\\ArticlesController::indexFront'], [], [['text', '/articles/indexfront']], [], [], []],
    'app_articles_editcomment' => [['id', 'idc'], ['_controller' => 'App\\Controller\\ArticlesController::editComment'], [], [['variable', '/', '[^/]++', 'idc', true], ['text', '/editcomment'], ['variable', '/', '[^/]++', 'id', true], ['text', '/articles']], [], [], []],
    'app_articles_quick_view' => [['id'], ['_controller' => 'App\\Controller\\ArticlesController::quickView'], [], [['text', '/quick-view'], ['variable', '/', '[^/]++', 'id', true], ['text', '/articles']], [], [], []],
    'app_articles_cart' => [[], ['_controller' => 'App\\Controller\\ArticlesController::viewCart'], [], [['text', '/articles/cart']], [], [], []],
    'app_articles_new' => [[], ['_controller' => 'App\\Controller\\ArticlesController::new'], [], [['text', '/articles/new']], [], [], []],
    'app_articles_show' => [['idArticle'], ['_controller' => 'App\\Controller\\ArticlesController::show'], [], [['variable', '/', '[^/]++', 'idArticle', true], ['text', '/articles']], [], [], []],
    'app_articles_showadmin' => [['idArticle'], ['_controller' => 'App\\Controller\\ArticlesController::showadmin'], [], [['text', '/admin'], ['variable', '/', '[^/]++', 'idArticle', true], ['text', '/articles']], [], [], []],
    'app_articles_edit' => [['idArticle'], ['_controller' => 'App\\Controller\\ArticlesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idArticle', true], ['text', '/articles']], [], [], []],
    'app_articles_delete' => [['idArticle'], ['_controller' => 'App\\Controller\\ArticlesController::delete'], [], [['variable', '/', '[^/]++', 'idArticle', true], ['text', '/articles']], [], [], []],
    'app_articles_pdfcart' => [['id'], ['_controller' => 'App\\Controller\\ArticlesController::pdfcart'], [], [['text', '/pdfcart'], ['variable', '/', '[^/]++', 'id', true], ['text', '/articles/cart']], [], [], []],
    'app_articles_pdf' => [['id'], ['_controller' => 'App\\Controller\\ArticlesController::pdf'], [], [['text', '/pdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/articles']], [], [], []],
    'app_commentaire_index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire/']], [], [], []],
    'app_commentaire_new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], [], []],
    'app_commentaire_show' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::showR'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_galeries_index' => [[], ['_controller' => 'App\\Controller\\GaleriesController::index'], [], [['text', '/galeries/']], [], [], []],
    'app_galeries_new' => [[], ['_controller' => 'App\\Controller\\GaleriesController::new'], [], [['text', '/galeries/new']], [], [], []],
    'app_galeries_show' => [['idGalerie'], ['_controller' => 'App\\Controller\\GaleriesController::show'], [], [['variable', '/', '[^/]++', 'idGalerie', true], ['text', '/galeries']], [], [], []],
    'app_galeries_edit' => [['idGalerie'], ['_controller' => 'App\\Controller\\GaleriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idGalerie', true], ['text', '/galeries']], [], [], []],
    'app_galeries_delete1' => [['idGalerie'], ['_controller' => 'App\\Controller\\GaleriesController::delete1'], [], [['variable', '/', '[^/]++', 'idGalerie', true], ['text', '/galeries/affect']], [], [], []],
    'app_galeries_delete' => [['idGalerie'], ['_controller' => 'App\\Controller\\GaleriesController::delete'], [], [['variable', '/', '[^/]++', 'idGalerie', true], ['text', '/galeries']], [], [], []],
    'app_panier_index' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier/']], [], [], []],
    'app_panier_new' => [[], ['_controller' => 'App\\Controller\\PanierController::new'], [], [['text', '/panier/new']], [], [], []],
    'app_panier_show' => [['idPanier'], ['_controller' => 'App\\Controller\\PanierController::show'], [], [['variable', '/', '[^/]++', 'idPanier', true], ['text', '/panier']], [], [], []],
    'app_panier_edit' => [['idPanier'], ['_controller' => 'App\\Controller\\PanierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idPanier', true], ['text', '/panier']], [], [], []],
    'app_panier_delete' => [['idPanier'], ['_controller' => 'App\\Controller\\PanierController::delete'], [], [['variable', '/', '[^/]++', 'idPanier', true], ['text', '/panier']], [], [], []],
    'app_rating_index' => [[], ['_controller' => 'App\\Controller\\RatingController::index'], [], [['text', '/rating/']], [], [], []],
    'app_rating_new' => [[], ['_controller' => 'App\\Controller\\RatingController::new'], [], [['text', '/rating/new']], [], [], []],
    'app_rating_show' => [['idRating'], ['_controller' => 'App\\Controller\\RatingController::show'], [], [['variable', '/', '[^/]++', 'idRating', true], ['text', '/rating']], [], [], []],
    'app_rating_edit' => [['idRating'], ['_controller' => 'App\\Controller\\RatingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idRating', true], ['text', '/rating']], [], [], []],
    'app_rating_delete' => [['idRating'], ['_controller' => 'App\\Controller\\RatingController::delete'], [], [['variable', '/', '[^/]++', 'idRating', true], ['text', '/rating']], [], [], []],
    'app_rating_article' => [['articleId'], ['_controller' => 'App\\Controller\\RatingController::rateArticle'], [], [['variable', '/', '[^/]++', 'articleId', true], ['text', '/rating/article']], [], [], []],
    'app_reclam_index' => [[], ['_controller' => 'App\\Controller\\ReclamController::index'], [], [['text', '/reclam/']], [], [], []],
    'app_reclam_index2' => [[], ['_controller' => 'App\\Controller\\ReclamController::index2'], [], [['text', '/reclam/myclaims']], [], [], []],
    'app_reclam_new' => [[], ['_controller' => 'App\\Controller\\ReclamController::new'], [], [['text', '/reclam/new']], [], [], []],
    'app_reclam_show' => [['idr'], ['_controller' => 'App\\Controller\\ReclamController::show'], [], [['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam']], [], [], []],
    'app_reclam_show2' => [['idr'], ['_controller' => 'App\\Controller\\ReclamController::show2'], [], [['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam/show2']], [], [], []],
    'app_reclam_satisfied' => [['idr', 'idrep'], ['_controller' => 'App\\Controller\\ReclamController::satistied'], [], [['variable', '/', '[^/]++', 'idrep', true], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam/satisfied']], [], [], []],
    'app_reclam_unsatisfied' => [['idr', 'idrep'], ['_controller' => 'App\\Controller\\ReclamController::unsatistied'], [], [['variable', '/', '[^/]++', 'idrep', true], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam/unsatisfied']], [], [], []],
    'app_reclam_edit2' => [['idr'], ['_controller' => 'App\\Controller\\ReclamController::edit2'], [], [['text', '/edit2'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam']], [], [], []],
    'app_reclam_edit' => [['idr'], ['_controller' => 'App\\Controller\\ReclamController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam']], [], [], []],
    'app_reclam_pdf' => [['idr'], ['_controller' => 'App\\Controller\\ReclamController::pdf'], [], [['text', '/pdf'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam']], [], [], []],
    'app_reclam_delete' => [['idr'], ['_controller' => 'App\\Controller\\ReclamController::delete'], [], [['variable', '/', '[^/]++', 'idr', true], ['text', '/reclam']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verify'], [], [['text', '/verifytemplate']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_reponse_new' => [['idr'], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reponse']], [], [], []],
    'app_reponse_edit' => [['idr', 'id'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reponse']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'login_check' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginCheck'], [], [['text', '/login_check']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_stats' => [[], ['_controller' => 'App\\Controller\\StatsController::stats'], [], [['text', '/stats/']], [], [], []],
    'app_stats_artist' => [[], ['_controller' => 'App\\Controller\\StatsController::statsartist'], [], [['text', '/statsartist/']], [], [], []],
    'app_test0' => [[], ['_controller' => 'App\\Controller\\TestController::index2'], [], [['text', '/back']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index1'], [], [['text', '/home']], [], [], []],
    'app_test3' => [[], ['_controller' => 'App\\Controller\\TestController::indexartist'], [], [['text', '/artist']], [], [], []],
    'app-cart' => [[], ['_controller' => 'App\\Controller\\TestController::cart'], [], [['text', '/cart']], [], [], []],
    'app_typereclamation_index' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::index'], [], [['text', '/typereclamation/']], [], [], []],
    'app_typereclamation_new' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::new'], [], [['text', '/typereclamation/new']], [], [], []],
    'app_typereclamation_show' => [['idtr'], ['_controller' => 'App\\Controller\\TypereclamationController::show'], [], [['variable', '/', '[^/]++', 'idtr', true], ['text', '/typereclamation']], [], [], []],
    'app_typereclamation_edit' => [['idtr'], ['_controller' => 'App\\Controller\\TypereclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idtr', true], ['text', '/typereclamation']], [], [], []],
    'app_typereclamation_delete' => [['idtr'], ['_controller' => 'App\\Controller\\TypereclamationController::delete'], [], [['variable', '/', '[^/]++', 'idtr', true], ['text', '/typereclamation']], [], [], []],
    'app_users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users/']], [], [], []],
    'app_users_new2' => [[], ['_controller' => 'App\\Controller\\UsersController::newForAdmin'], [], [['text', '/users/new2']], [], [], []],
    'app_users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], [], []],
    'app_users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_edit2' => [['id'], ['_controller' => 'App\\Controller\\UsersController::editForAdmin'], [], [['text', '/edit2'], ['variable', '/', '[^/]++', 'id', true], ['text', '/usersedit']], [], [], []],
    'app_users_edit3' => [['id'], ['_controller' => 'App\\Controller\\UsersController::editAdmin'], [], [['text', '/edit3'], ['variable', '', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_block' => [['id'], ['_controller' => 'App\\Controller\\UsersController::block'], [], [['text', '/block'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_unblock' => [['id'], ['_controller' => 'App\\Controller\\UsersController::unblock'], [], [['text', '/unblock'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
