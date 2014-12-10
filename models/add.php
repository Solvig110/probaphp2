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

