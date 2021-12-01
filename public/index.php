<?php

require_once("../vendor/autoload.php");

use \eti\DB\Query;

use \app\controllers\HomeController;

$query = new Query;

echo $query->query();

$home = new HomeController;

echo $home->home();