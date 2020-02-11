<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader( '../public/html' );
$twig = new \Twig\Environment($loader);

$location = 'asdf.sqlite3';
$db = new sqlite3($location);

$rez = $db->query('select * from users');
$data = array();
while($r = $rez->fetchArray()){
    array_push($data, $r);
}
$db->close();

echo $twig->render('demosql.html',[
    'data' => $data
]);

?>