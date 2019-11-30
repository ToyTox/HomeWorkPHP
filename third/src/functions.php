<?php
//Задача 3.1
$fileData = file_get_contents('data.xml');
function task1($fileData)
{
    $xml = new SimpleXMLElement($fileData);

    foreach ($xml->Address as $client) {
        echo 'Способ доставки: ' . $client->attributes()->Type . '<br>';
        echo 'Имя клиента - ' . $client->Name->__toString() . '<br>';
        echo 'Страна - ' . $client->Country->__toString() . '<br>';
        echo 'Штат - ' . $client->State->__toString() . '<br>';
        echo 'Город - ' . $client->City->__toString() . '<br>';
        echo 'Адрес - ' . $client->Street->__toString() . '<br>';
        echo 'Индекс - ' . $client->Zip->__toString() . '<p>';
    }

    echo 'Комментарий курьеру: ' . $xml->DeliveryNotes->__toString() . '<br>';

    foreach ($xml->Items->Item as $item) {
        echo 'Номер партии - ' . $item->attributes()->PartNumber . '<br>';
        echo 'Наименование продукта - ' . $item->ProductName->__toString() . '<br>';
        echo 'Количество - ' . $item->Quantity->__toString() . '<br>';
        echo 'Цена - ' . $item->USPrice->__toString() . '<br>';
        echo 'Комментарий - ' . $item->Comment->__toString() . '<br>';
        echo 'Дата доставки - ' . $item->ShipDate->__toString() . '<p>';
    }
    return $xml;
}

//Задача 3.2
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
function task2($musicArray, $musicArray2)
{
    file_put_contents('output.json', json_encode($musicArray));
    $music = file_get_contents('output.json');
    if (rand(0, 1)) {
    //изменяем данные
        file_put_contents('output2.json', json_encode($musicArray2));
    } else {
        file_put_contents('output2.json', $music);
    }
    $musicOther = file_get_contents('output2.json');
    $musicString = '{"Rock":[{"band":"Queen","album":"A Night at the Opera","topSong":"Bohemian Rhapsody"},{"band":"Scorpions","album":"Crazy World","topSong":"Wind of Change"},{"band":"Metallica","album":"Metallica","topSong":"Nothing Else Matters"}]}';
    $musicOtherString = '{"Rock":[{"band":"Eminem","album":"A Night at the Opera","topSong":"Bohemian Rhapsody"},{"band":"Scorpions","album":"Californi","topSong":"Wind of Change"},{"band":"Metallica","album":"Metallica","topSong":"Nothing Else Matters"}]}';
    json_decode($musicString, true);
    json_decode($musicOtherString, true);
    $result = array_diff_assoc($musicArray['Rock'], $musicArray2['Rap']);
//    echo '<pre>';
    return ($result);
//    echo '</pre>';
}

// Задача 3.3
$arrayNumber = [];
function task3 ($arrayNumber)
{
    for ($number = 0; $number < 50; $number++) {
        $arrayNumber[] = rand(1, 100);
    }

    $newFile = fopen('numbers.csv', 'w');
    fputcsv($newFile, $arrayNumber, ';');

    //echo '<pre>' . print_r($arrayNumber, 1) . '</pre>';
    fclose($newFile);

    $getFile = fopen('numbers.csv', 'r');
    $numbers = fgetcsv($getFile, 1000, ';');

    $sum = 0;
    foreach ($numbers as $value) {
        if ($value % 2 == 0) {
            $sum += $value;
        }
    }
    return ($sum);
}

//Задача 3.4
$sideInfo = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');

function task4 ($sideInfo)
{
$decoded = json_decode($sideInfo, true);
$pageId = $decoded['query']['pages']['15580374']['pageid'];

return ($pageId);
}

function task5 ($sideInfo)
{
$decoded = json_decode($sideInfo, true);
$pageTitle = $decoded['query']['pages']['15580374']['title'];

return ($pageTitle);
}

