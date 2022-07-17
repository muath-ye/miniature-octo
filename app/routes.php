<?php

$router->get('', 'PagesController@home');
$router->get('sql', 'PagesController@sql');
$router->get('categories', 'PagesController@categories');
$router->get('accounts', 'PagesController@accounts');
$router->get('totp', 'PagesController@totp');