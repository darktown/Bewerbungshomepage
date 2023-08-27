<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/csv' => [[['_route' => 'app_csv', '_controller' => 'App\\Controller\\CsvController::index'], null, null, null, false, false, null]],
        '/footer' => [[['_route' => 'app_footer', '_controller' => 'App\\Controller\\FooterController::index'], null, null, null, false, false, null]],
        '/head' => [[['_route' => 'app_head', '_controller' => 'App\\Controller\\HeadController::headerinfo'], null, null, null, false, false, null]],
        '/header' => [[['_route' => 'app_header', '_controller' => 'App\\Controller\\HeaderController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/impressum' => [[['_route' => 'impressum', '_controller' => 'App\\Controller\\ImpressumController::index'], null, null, null, false, false, null]],
        '/lebenslauf' => [[['_route' => 'app_lebenslauf', '_controller' => 'App\\Controller\\LebenslaufController::index'], null, null, null, false, false, null]],
        '/modal' => [[['_route' => 'app_modal', '_controller' => 'App\\Controller\\ModalController::index'], null, null, null, false, false, null]],
        '/nav/bar' => [[['_route' => 'app_nav_bar', '_controller' => 'App\\Controller\\NavBarController::index'], null, null, null, false, false, null]],
        '/nav/bar/imprint' => [[['_route' => 'app_nav_bar_imprint', '_controller' => 'App\\Controller\\NavBarImprintController::index'], null, null, null, false, false, null]],
        '/programm' => [[['_route' => 'app_programm', '_controller' => 'App\\Controller\\ProgrammController::index'], null, null, null, false, false, null]],
        '/projekte' => [[['_route' => 'app_projekte', '_controller' => 'App\\Controller\\ProjekteController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'app_skills', '_controller' => 'App\\Controller\\SkillsController::index'], null, null, null, false, false, null]],
        '/social' => [[['_route' => 'app_social', '_controller' => 'App\\Controller\\SocialController::social'], null, null, null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:48)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:90)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:126)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        90 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        126 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
