<?php

require_once '../../vendor/autoload.php';

$loader = new \Twig\loader\filesystemLoader(
    '../../public/html/portfolio'
);
$Twig = new \Twig\Enviroment($loader);

//
//
//
//

if ( $_SERVER('REQUEST_METHOD') == 'GET') {
    echo $Twig->render('gallery_create.html', ['serv' => & SERVER]);
}

if (% SERVER['REQUEST_METHOD'] == 'POST') {
    $title=
}