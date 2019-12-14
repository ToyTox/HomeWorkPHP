<?php
// создать файл admin.php и вызвать там эти функции

// написать функцию получения всех заказов из таблицы orders
$allOrders = $pdo->query("SELECT COUNT(*) as total FROM orders")->fetchAll();
$allUserOrders = $allOrders[0]['total'];
echo 'Всего сделано заказов ' . "$allUserOrders" . '<br>';


// написать функцию получения всех пользователей из таблицы users
$allUsers = $pdo->query("SELECT COUNT(*) as total FROM users")->fetchAll();
$totalUsers = $allUsers[0]['total'];
echo 'Всего заведено пользователей ' . "$totalUsers" . '<br>';

$tableUsers = $pdo->query("SELECT * FROM users")->fetchAll();

echo '<table border="solid 1">';
foreach ($tableUsers as $users=>$value) {
    echo '<tr>';
    foreach ($value as $key=>$val) {
        echo '<td>' . "$val" . '<td>';
    }
    echo '<tr>';
}

$tableOrders = $pdo->query("SELECT * FROM orders WHERE 'part' IS NOT NULL")->fetchAll();

echo '<table border="solid 1">';
foreach ($tableOrders as $Orders=>$tableOrder) {
    echo '<tr>';
    foreach ($tableOrder as $key1=>$val1) {
        echo '<td>' . "$val1" . '<td>';
    }
    echo '<tr>';
}
