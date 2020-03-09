<?php

require_once "../vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader(
    "./html"
);
$twig = new \Twig\Environment($loader);

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    echo $twig->render('demoadd.html');
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $unick = $_POST['usernick'];
    $uemail = $_POST['useremail'];
    $upswd = $_POST['userpswd'];
    $location = 'asdf.sqlite3';
    $db = new sqlite3($location);
    $sql = 'INSERT INTO users(name,email,password) VALUES(:un,:um,:up)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':un',$unick);
    $stmt->bindValue(':um',$uemail);
    $stmt->bindValue(':up',$upswd);
    $stmt->execute();
    $db->close();

    header('Location: demosql.php');
}

?>