<?php
$name = 'Nik';
$greeting = 'Hello';

if ($name !== ' ') {
    $greeting = 'Добро пожаловать, ' . $name;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Использование конструкции if</title>
</head>
<body>

<h1>The Candy Store</h1>
<h2><?= $greeting ?></h2>

</body>
</html>
