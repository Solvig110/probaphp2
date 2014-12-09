<?php

require_once __DIR__ . '/../functions/db.php';

    require_once  'news.php';

 if (isset($_POST['title']) and isset($_POST['text']))
     {
         $title=$_POST['title'];
    $text=$_POST['text'];
    News_insert($title,$text);
 }

header('location: /index.php');

/*if(isset($_POST['go_add']))
{
    if (isset($_POST['title']))        {$title = $_POST['title']; if ($title == '') {unset($title);}}


    if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
    ;}


    if ($_POST['title']!="" )

    {


        if (mysql_query ("INSERT INTO data SET
            title='".$title."',

            text='".$text."',
            author='".$author."'"))
        {
            echo "<div class='clean-ok'>Новость успешно добавлена!<br><a href='/admin/index.php?f=news&mod=add'>Добавить ещё.</a></p></div>";
        }
        else
        {
            echo "<div class='clean-gray'>Неудалось обработать базой<div>";
            $dar=mysql_error();
            echo $der;
        }


    }
    else
    {
        echo "<div class='clean-error'><p>Незаполнена вся инфа.</p></div>";
    }



} ?>*/