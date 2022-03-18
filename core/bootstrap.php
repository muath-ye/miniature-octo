<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'app/config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
