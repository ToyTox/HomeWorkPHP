<?php
global $pdo;

require('connect.php');
require('admin.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$street = $_REQUEST['street'];
$home = $_REQUEST['home'];
$part = $_REQUEST['part'];
$floor = $_REQUEST['floor'];
$comment = $_REQUEST['comment'];
$payment = $_REQUEST['payment'];
$callback = $_REQUEST['callback'] ?? null;

$data = $pdo->query("SELECT id FROM users WHERE email = '$email'")->fetchAll();
$userId = $data[0]['id'] ?? null;

if (!empty($userId)) {
    echo $userId . '<br>';
} else {
//    создать нового пользователя
    $pdo->exec("INSERT INTO users (`name`, email, phone) VALUES ('$name', '$email', '$phone')");
    $userId = $pdo->lastInsertId();
    echo "пользователь с id $userId создан";
}

// создаем новый заказ с userId
$callback = $callback ? 'yes' : 'no';
$pdo->exec("INSERT INTO orders (user_id, street, home, part, floor, payment, callback) VALUES ('$userId', '$street', '$home', '$part', '$floor', '$payment', '$callback')");
$userOrderId = $pdo->lastInsertId();
echo "заказ с id $userOrderId создан" . '<br>';


// подсчитать кол-во заказов у пользователя с id  SELECT COUNT as total FROM orders WHERE user_id = сюда id
$totalOrders = $pdo->query("SELECT COUNT(*) as total FROM orders WHERE user_id = '$userId'")->fetchAll();
$totalUserOrder = $totalOrders[0]['total'] > 1 ? $totalOrders[0]['total'] : 'первый';
$userName = $pdo->query("SELECT `name` FROM users WHERE `name` = '$name'")->fetchAll();
$usrName = $userName[0]['name'];

// составить сообщение для пользователя по образцу
$userAddress = $pdo->query("SELECT street, home, part, floor, payment, callback FROM orders WHERE user_id = '$userId'")->fetchAll();
//echo '<pre>' . print_r($userAddress) . '</pre>';
foreach ($userAddress[0] as $key => $value) {
    $address1[] = "$key: $value ";
}
$address = implode(', ', $address1);

$mail = "Заголовок - заказ № $userOrderId\n\n
Ваш заказ будет доставлен по адресу: $address\n
Содержимое заказа: DarkBeefBurger за 500 рублей, 1 шт\n
Спасибо - это ваш $totalUserOrder заказ";
file_put_contents("order_$userOrderId.php", $mail);

echo 'У пользователя ' . "$usrName" . ' всего ' . "$totalUserOrder" . ' заказов' . '<br>';
