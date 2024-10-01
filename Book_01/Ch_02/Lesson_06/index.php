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
<h2>Prices for Large Order</h2>
<p>
    <?php
    for ($i = 10; $i <= 100; $i += 10) {
        echo $i;
        echo ' packs cost $';
        echo $price * $i;
        echo '<br>';
    }
    ?>
</p>

</body>
</html>
