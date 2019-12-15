<?php

require_once '../../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(
    '../../public/html/portfolio'
);
$twig = new \Twig\Environment($loader);

require_once '../storage/hotels_dat.php';

$h_str = serialize($hotels);
// var_dump($h_str);
// $f = fopen("../storage/hotels.dat", "")
// 

echo $twig->render('gallery.html',
    [ 'hotels' => $hotels
    
    ]
);

?>