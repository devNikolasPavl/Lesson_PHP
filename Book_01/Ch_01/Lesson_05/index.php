<?php
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jetty beans'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание индексированного массива и лоступ к его элементам</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Best Sellers</h2>
<ul>
    <li><?php echo $best_sellers[0]; ?></li>
    <li><?php echo $best_sellers[1]; ?></li>
    <li><?php echo $best_sellers[2]; ?></li>
</ul>

</body>
</html>

