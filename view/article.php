
<html>
<head>
    <title>Статья </title>
</head>
<body>
<h2>Выбрать новость</h2>
<form action="/../models/onearticle.php"  method="get">
    <input type="text" name="id">Введите номер<br></input>

    <button type="submit" name="go_add" >Сохранить </button>
</form>
<?php
// в 16 строке выдается ошибка
require_once __DIR__ . '/../models/onearticle.php';
foreach ($article as $a): ?>
    <article>
        <h1><?=$a['title'];?></h1>
        <div><?=$a['text'];?></div>
    </article>
<?php endforeach; ?>


