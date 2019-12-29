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
    $title =  $_POST['h_title'];
    $desc   =  $_POST['h_desc'];
    $file  =  $_FILES['h_file'];
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newname = (uniqid(rand(), true) ) ] . '.' . $ext;
    move_uploaded_file(
        $file['tmp_file'],
        '../images/hotels/' . $newname
    );
    $h_url = '/images/hotels' . $newname;
    
    $frame = '../storage/hotels.dat';
    $f = fopen($frame, 'r');
    $h_str = fread($f, filesize())
}