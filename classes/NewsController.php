<?php
class NewsController
extends AController
{
    protected function actionALL()
    {

        $view=new View();
$view->news=News_getall();
    $view->display('template/index.php');
    }



    protected function actionOne()
   {

    $view=new View();
    $view->news=News_getOne($_GET['id']);
    $view->display('template/article.php');
     }


}