<?php

// Incluir configuraciones y rutas
require_once __DIR__ . '/../src/backend/bootstrap.php';

// ---------------------------------------------------------
// 1) URI normalizada
// ---------------------------------------------------------
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$requestUri = rtrim($requestUri, '/');
if ($requestUri === '') $requestUri = '/';

// ---------------------------------------------------------
// 2) Detectar idioma SOLO si es el PRIMER segmento completo
//    
// ---------------------------------------------------------
$lang = 'es';
$uriForRouting = $requestUri;

// Idiomas soportados
$langPattern = '#^/(ca|es|en|it)(/|$)#';

if (preg_match($langPattern, $requestUri, $m)) {
    $candidate = $m[1];

    // Si usas "es" sin prefijo normalmente, puedes permitirlo igual sin romper
    // (pero no lo necesitas). Dejamos ca soportado por si lo pones algún día.
    $lang = $candidate ?: 'es';

    // Quitar el prefijo de idioma para hacer match con $routes
    // Ej: "/es/hispantic" => "/hispantic"
    $uriForRouting = preg_replace($langPattern, '/', $requestUri);
    $uriForRouting = rtrim($uriForRouting, '/');
    if ($uriForRouting === '') $uriForRouting = '/';
}

// Cargar traducciones correspondientes
$translations = require __DIR__ . "/../src/backend/Locales/{$lang}.php";

// ---------------------------------------------------------
// 3) Resolver rutas usando $uriForRouting (sin /es, /fr...)
// ---------------------------------------------------------
$routeParams = [];
$routeFound = false;
$view = './includes/404.php';
$headerMenu = true;

foreach ($routes as $route => $routeInfo) {
    $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_-]+)', $route);
    $page = $routeInfo['page'] ?? null;

    if (preg_match('#^' . $pattern . '$#', $uriForRouting, $matches)) {
        $routeFound = true;
        $routeParams = array_slice($matches, 1);
        $view = $routeInfo['view'];

        // flags
        $headerMenu = $routeInfo['header_menu_footer'] ?? false;
        break;
    }
}

// ---------------------------------------------------------
// 4) Render final (manteniendo tu lógica)
//    OJO: aquí conviene comprobar contra $requestUri (con idioma),
//    pero con patrón de segmento completo
// ---------------------------------------------------------
if ($headerMenu) {
    extract([
        'lang' => $lang,
        'page' => $page,
        'translations' => $translations
    ]);
    include './includes/header.php';
    include './includes/header-menu.php';
    include $view;
    include './includes/footer.php';
    include './includes/footer-end.php';
}
