<?php

function generateLanguageRoutes(array $base_routes, bool $use_languages = true): array
{
    $languages = ['es', 'ca', 'en', 'it'];
    $default_language = 'es';

    $routes = [];

    if (!$use_languages) {
        return $base_routes;
    }

    foreach ($languages as $lang) {
        foreach ($base_routes as $path => $view) {

            $page = trim($path, '/');
            if ($page === '') $page = 'home';

            if ($lang === $default_language) {

                $routes[$path] = [
                    'view' => $view,
                    'page' => $page,
                    'header_menu_footer' => true,
                ];
            } else {

                $routes["/{$lang}{$path}"] = [
                    'view' => $view,
                    'page' => $page,
                    'header_menu_footer' => true,
                ];
            }
        }
    }

    return $routes;
}


// Configuración por defecto para rutas que requieren sesión, sin header_footer, con header_menu_footer
$defaultRoutes = [
    'header_menu_footer' => true,
];

// Define las rutas base que quieres traducir
$base_routes = [
    // 00. Homepage
    '/' => './pages/index.php',
    '/principios' => './pages/principios.php',
    '/servicios' => './pages/servicios.php',
    '/casos' => './pages/casos.php',
    '/nosotros' => './pages/nosotros.php',

    '/casos/finguer' => './pages/casos-finguer.php',

    // Altres pagines
    '/aviso-legal' => './web-publica/legal/aviso-legal.php',
    '/politica-privacidad' => './web-publica/legal/politica-privacidad.php',
    '/politica-cookies' => './web-publica/legal/politica-cookies.php',

];

// Rutas principales sin idioma explícito (solo para el idioma por defecto)
$routes = [
    '/' => [
        'view' => './pages/index.php',
        'page' => 'home',
        'header_menu_footer' => true
    ],

    '/principios' => [
        'view' => './pages/principios.php',
        'page' => 'principios',
        'header_menu_footer' => true
    ],

    '/servicios' => [
        'view' => './pages/servicios.php',
        'page' => 'servicios',
        'header_menu_footer' => true
    ],

    '/casos' => [
        'view' => './pages/casos.php',
        'page' => 'casos',
        'header_menu_footer' => true
    ],

    '/nosotros' => [
        'view' => './pages/nosotros.php',
        'page' => 'nosotros',
        'header_menu_footer' => true
    ],

    '/casos/finguer' => [
        'view' => './pages/casos-finguer.php',
        'page' => 'casos',
        'header_menu_footer' => true
    ],

    '/aviso-legal' => [
        'view' => './pages/legal/aviso-legal.php',
        'header_footer' => false,
        'header_menu_footer' => true
    ],

    '/politica-privacidad' => [
        'view' => './pages/legal/politica-privacidad.php',
        'header_footer' => false,
        'header_menu_footer' => true
    ],

    '/politica-cookies' => [
        'view' => './pages/legal/politica-cookies.php',
        'header_footer' => false,
        'header_menu_footer' => true
    ],

];

// Unir rutas base con rutas específicas de idioma
$routes = $routes + generateLanguageRoutes($base_routes, true);

return $routes;
