<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/app/functions/functions.php';

use App\Http\Router;
use App\Utils\View;


define('URL', 'http://localhost/php-mvc');

View::init([
    'URL'=>URL,
]);

$obRouter = new Router(URL);

require_once __DIR__.'/routes/pages.php';

$obRouter->run()
         ->sendResponse();