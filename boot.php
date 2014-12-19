<?php
function __autoload($class)
{// echo  $class;
   // die;
    require 'classes/'.$class.'.'.'php';
}
/*require_once_DIR_.'models/news.php'
$view=new View();
$views->news=Newsget_all();
    $view=display(view/index.php);


    require 'boot.php';
$route=
*/


