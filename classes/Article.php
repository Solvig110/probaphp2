<?php
require_once __DIR__ . '/Dbase.php';

abstract class Article extends Dbase
{
    abstract public  function News_insert($_title,$_text);
    abstract public  function  One_article($id);
//abstract public  function updateArticle($id, $new_title, $new_text);
}