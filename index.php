<?php
// Dispatcher :)

require 'Controller.php';
require 'View.php';

$view = new View();
$view->setTemplate(__DIR__.'/views/controller/index.php');

// Init controller
$controller = new Controller();
$controller->setView($view);

// Run action
$controller->indexAction();

// Post action
$view = $controller->getView();

// Output HTML
echo $view->render();
