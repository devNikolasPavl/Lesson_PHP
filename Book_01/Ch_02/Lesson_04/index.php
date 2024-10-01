<?php
$counter = 1;
$packs = 5;
$price = 1.99;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Использование цикла while</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Prices for Multiple Packs</h2>
<p>
    <?php
    while ($counter <= $packs) {
        echo $counter;
        echo ' packs cost $';
        echo $price * $counter;
        echo '<br>';
        $counter++;
    }
    ?>
</p>

</body>
</html>
