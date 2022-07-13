<?php

/*Общие константы приложения*/

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("REPOSITORY_PATH", ROOT . "/repositories/");
define("VIEW_PATH", ROOT . "/views/");
define("UPLOAD_FOLDER", ROOT. "/uploads/");

require_once('db.php');
require_once('route.php');
require_once REPOSITORY_PATH . 'Repository.php';
require_once VIEW_PATH . 'View.php';
require_once CONTROLLER_PATH . 'Controller.php';

Routing::buildRoute();