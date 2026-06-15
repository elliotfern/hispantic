<?php

require_once __DIR__ . '../../../vendor/autoload.php';

use Dotenv\Dotenv;

$basePath = __DIR__ . '/../..';

if (file_exists($basePath . '/.env')) {
    Dotenv::createImmutable($basePath)->load();
}

require_once __DIR__ . '/Routes/routes.php';

function routeUrl(string $path, string $lang = 'es'): string
{
    $path = '/' . ltrim($path, '/');

    if ($path === '/' || $path === '/home') {
        return $lang === 'es' ? '/' : '/' . $lang;
    }

    if ($lang === 'es') {
        return $path;
    }

    return '/' . $lang . $path;
}

function t(string $key): string
{
    global $translations;

    return $translations[$key] ?? $key;
}