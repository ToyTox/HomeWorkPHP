<?php
require('src/functions.php');

echo task1($fileData);

$musicArray = [
    'Rock' => [
        'first' => ['band' => 'Queen', 'album' => 'A Night at the Opera', 'topSong' => 'Bohemian Rhapsody'],
        'second' => ['band' => 'Scorpions', 'album' => 'Crazy World', 'topSong' => 'Wind of Change'],
        ['band' => 'Metallica', 'album' => 'Metallica', 'topSong' => 'Nothing Else Matters'],
    ]
];
$musicArray2 = [
    'Rap' => [
        ['name' => 'Eminem', 'lp' => ' The Marshall Mathers', 'song' => 'Stam'],
        ['band' => 'Scorpions', 'album' => 'Crazy World', 'topSong' => 'Wind of Change'],
        ['band' => 'Metallica', 'album' => 'Metallica', 'topSong' => 'Nothing Else Matters'],
    ]
];
echo '<pre>';
print_r(task2($musicArray, $musicArray2));
echo '</pre>';

$arrayNumber = [];
echo task3($arrayNumber) . '<p>';

$sideInfo = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');
echo task4($sideInfo) . '<p>';

echo task5($sideInfo);
