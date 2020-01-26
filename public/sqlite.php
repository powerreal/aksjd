<?php

require_once "../vendor/autoload.php"
$loader = new \Twig\Loader\Filesystemloader(
    "../public/html"
);
$twig = new \Twig\Environment($loader);

$location = '../asdf.sqlite3';
$asdf = new SQlite3($location);
$data = $rez->fetchArray();
$rez = $asdf->query('select * from users');
$data = array();
while ($r = $rez->fetchArray()){
    array_push()
}
$asdf->close();

?>