<?php
$day = 'Понедельник';

switch ($day) {
    case 'Понедельник':
        $offer = '20% скидка';
        break;
    case 'Вторник':
        $offer = '10% скидка';
        break;
    default:
        $offer = 'Нет скидок';
        break;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Использование конструкции switch</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2>Offers on <?= $day; ?></h2>
<p><?= $offer; ?></p>

</body>
</html>
