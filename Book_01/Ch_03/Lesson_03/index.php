<?php
/*Функции обычно используется для получения новых значений. При
 * использовании ключевого слова return такое значение может быть
 * отправлено обратно в код, вызвавший функцию
 */
function creat_copyright_notice()
{
    $year = date("Y");
    $message = '&copy; ' . $year;
    return $message;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Получение результата работы функции</title>
</head>
<body>
<h1>The Candy Store</h1>
<h2>Welcome</h2>

<footer>
    <?php echo creat_copyright_notice(); ?>
</footer>

</body>
</html>
