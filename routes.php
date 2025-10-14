<?php

$router->get('/', 'HomeController@index');
$router->get('/users', 'UserController@index'); // renders HTML view
$router->get('/products', 'ProductController@index'); 
$router->get('/api/users', 'UserApiController@index');
