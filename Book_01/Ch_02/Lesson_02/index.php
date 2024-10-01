<?php
$stock = 5;

if ($stock > 0) {
    $message = 'В наличие';
} else {
    $message = 'Продано';
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>использование конструкции if ... else</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Chocolate</h2>
<p><?= $message ?></p>

</body>
</html>
