<?php
$price = 1.99;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Использование цикла for</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Prices for Multiple Packs</h2>
<p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo ' packs cost $';
        echo $price * $i;
        echo '<br>';
    }
    ?>
</p>

</body>
</html>
