<?php
//  не получается вывод одной статьи

 require_once __DIR__ . '/news.php';
include '/../view/article.php';
 $id=$_GET['id'];
$article = One_article();
//echo $article;
if (false === $article);
    echo 'error';



