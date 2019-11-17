<?php

require_once ".../vendor/autoload.php";

$loader = new \Twig\loader\Filesystemloader(
    "../public/html"
);
$twig = new \Twig\Enviroment($loader);

$myName = "MaxDaniv"
$cities = ['lviv','kyiv','rivne'];

$score = [
    ['name'=>'Pupil 1', 'score'=>[6, 8, 7], 'avg'=>0 ],
    ['name'=>'Pupil 2', 'score'=>[9, 10, 12], 'avg'=>0 ],
    ['name'=>'Pupil 3', 'score'=>[4, 5, 6], 'avg'=>0 ],
    ['name'=>'Pupil 4', 'score'=>[6, 7, 7], 'avg'=>0 ],
    ['name'=>'Pupil 5', 'score'=>[5, 4, 9], 'avg'=>0 ]
];

for ($i=0; $i < count($score); $i++) {
    $a = 0;
    for ($j=0; $j<3; $j++) {
        $a += $score[$i]['score'][$i];

    }
    $a /= 3;
}

echo $twig->render('app.html',[
    'title' => '1st max page',
    'username' => $myName,
    'cities' => $cities,
    'score' => $score
]);

?>