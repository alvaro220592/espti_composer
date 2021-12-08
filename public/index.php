<?php

require_once("../vendor/autoload.php");

use \eti\DB\Query;

use \app\controllers\HomeController;

use Dompdf\Dompdf;

/* $query = new Query;

echo $query->query();

$home = new HomeController;

echo $home->home(); */


// instancia
$dompdf = new Dompdf;

// cria o conteúdo que vai sair no pdf
$dompdf->loadHtml('Teste PDF');

// configura o layout
$dompdf->setPaper('A4', 'landscape');

// renderiza
$dompdf->render();

// mostra no browser
$dompdf->stream();