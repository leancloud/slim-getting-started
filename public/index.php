<?php

date_default_timezone_set('Asia/Shanghai');

if (php_sapi_name() === 'cli-server') {
    $url = parse_url($_SERVER["REQUEST_URI"]);
    if ($url["path"] != "/" && file_exists(__DIR__ . $url["path"])) {
        // Static file, serve it as-is
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/../src/app.php";

