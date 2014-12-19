<?php

//require_once __DIR__ . '/models/news.php';

//$news = News_getAll();

//include 'view/index.php';


require 'boot.php';
//роутер
//r=news/all
$route = $_GET['r'];
$routeParts = explode('/',$route);
$controllerClassName = ucfirst($routeParts[0].'Controller');
$actionName=$routeParts[1];
//фронтконтроллер
$controller = new $controllerClassName;
$controller->action($routeParts[1]);
//$controller = new NewsContrloller();
//$controller->('all');

