<?php
$nutrition = [
    'fat' => 38,
    'sugar' => 51,
    'salt' => 0.25,
];
$nutrition['fat'] = 36;
$nutrition['fiber'] = 2.1;

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изменение значений элементов массива</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Nutrition (per 100g)</h2>

<p>Fat:     <?php echo $nutrition['fat']; ?>%</p>
<p>Sugar:   <?php echo $nutrition['sugar']; ?>%</p>
<p>Slat:    <?php echo $nutrition['salt']; ?>%</p>
<p>Fiber:   <?php echo $nutrition['fiber']; ?>%</p>

</body>
</html>
