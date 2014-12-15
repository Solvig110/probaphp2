<?php

 require __DIR__ . '/newsclass.php';


$id=$_GET['id'];
$viewarticle=new News();

$art=$viewarticle->One_article($id);


include __DIR__ .'/../view/article.php' ;


