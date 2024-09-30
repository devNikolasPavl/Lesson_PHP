<?php
$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание ассоциативного массива и доступа к его элементам</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>содержание (в 100 граммах)</h2>
<p>Жиры:    <?php echo $nutrition['fat']; ?>%</p>
<p>Сахар:   <?php echo $nutrition['sugar']; ?>%</p>
<p>Соль:    <?php echo $nutrition['salt']; ?>%</p>

</body>
</html>
