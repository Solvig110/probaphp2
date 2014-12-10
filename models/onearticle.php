<?php
//  не получается вывод одной статьи

 require_once __DIR__ . '/news.php';
require_once __DIR__ .'/../view/article.php' ;

 $id=$_GET['id'];
$article=One_article($id);
//$id=3;
//echo $article;
if (false === $article);
    echo 'error';



