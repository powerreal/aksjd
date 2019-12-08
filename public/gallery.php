<?php

require_once '../../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(
    '../../public/html/portfolio'
);
$twig = new \Twig\Environment($loader);

include_once '../storage/hotels_dat.php';

echo $twig->render('gallery.html');

?>