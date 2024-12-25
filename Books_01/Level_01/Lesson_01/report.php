<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Космические пришельцы похищали меня - сообщение о похищении</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Космические пришельцы похищали меня - сообщение о похищении</h2>

<?php

    $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did = $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];

    $to = 'owen@aliensabductedme.com';
    $subject = 'Космические пришельцы похищали меня - сообщение о похищении';
    $msg = "$name был похищен $when_it_happened и отсутствовал в течение $how_long.\n" .
    "Количество космических пришельцев: $how_many\n" . 
    "Описание космических пришельцев: $alien_description\n" . 
    "Что они делали? $what_they_did\n" . 
    "Фэнг замечен? $fang_spotted\n" . 
    "Дополнительная информация: $other";
    mail($to, $subject, $msg, 'From: ' . $email);

    echo 'Спасибо за заполнение формы.<br>';
    echo 'Вы были похищены ' . $when_it_happened;
    echo 'и отсутствовали в течение ' . $how_long . '<br>';
    echo 'Количество космических пришельцев: ' . $how_many . '<br>';
    echo 'Опишите их: ' . $alien_description . '<br>';
    echo 'Что они делали? ' . $what_they_did . '<br>';
    echo 'Видели ли вы мою собаку Фэнга? ' . $fang_spotted . '<br>';
    echo 'Дополнительная информация: ' . $other . '<br>';
    echo 'Ваш адрес электронной почты: ' . $email;
?>
    
</body>
</html>