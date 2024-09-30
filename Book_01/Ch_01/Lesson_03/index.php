<?php

$name = 'Nik';
$price = 5;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание переменных и работа с ними</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Добро пожаловать <?php echo $name; ?></h2>

<p>Стоимость конфет $<?php echo $price; ?> за упаковку.</p>

</body>
</html>
