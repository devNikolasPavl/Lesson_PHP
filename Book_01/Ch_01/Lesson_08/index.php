<?php
$username = 'Nik';      // Объявление переменной, содержащей имя пользователя

$greeting = 'Hello, '.$username. '.';       // Приветствие 'Hello, ' + имя

$offer = [              // Массив, содержащий специальное предложение
    'item' => 'Chocolate',      // Название товара со скидкой
    'qty' => 5,                 // Количество
    'price' => 5,               // Первоначальная цена за упаковку
    'discount' => 4,            // Цена со скидкой за упаковку
];

$usual_price = $offer['qty'] * $offer['price'];     // Цена без скидки
$offer_price = $offer['qty'] * $offer['discount'];  // Цена со скидкой
$saving = $usual_price - $offer_price;              // Сэкономленные средства
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Candy Store</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Multi-buy Offer</h2>

<p><?= $greeting ?></p>
<p class="sticker">Save <?= $saving ?></p>

<p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?>
for $<?= $offer_price ?> <br>(usual price $<?= $usual_price ?>) </p>

</body>
</html>
