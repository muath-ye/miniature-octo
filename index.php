<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};
use Symfony\Component\Dotenv\Dotenv;

/** Whoops */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
/** ./Whoops */

/** Dotenv */
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');
/* you can also load several files */
// $dotenv->load(__DIR__.'/.env', __DIR__.'/.env.dev');
/* overwrites existing env variables */
// $dotenv->overload(__DIR__.'/.env');
/* loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV */
// $dotenv->loadEnv(__DIR__.'/.env');
/** ./Dotenv */

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
