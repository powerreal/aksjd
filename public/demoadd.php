<?php

require_once "../vendor/autoload.php"

$loader = new \Twig\Loader\FilesystemLoader(
    "../public/html"
);
$twig = new \Twig\Envronment($loader);

if ( $_SERVER['REQUEST'])