<?php

require_once __DIR__ . '/../functions/dbclass.php';

abstract class Article extends Dbase
{
abstract public  function News_insert($_title,$_text);
abstract public  function  One_article($id);
//abstract public  function updateArticle($id, $new_title, $new_text);
}

class News extends Article {
public  function News_getAll()
{
    return $this-> DBQuery("
    SELECT * FROM news
    ");
}

public  function News_insert($title,$text)
{
return
    $this->DBExec("INSERT INTO `news` (`title`, `text`) VALUES ('$title', '$text')");
}
// как же все таки правильно писать 30 строчку?
public  function One_article ($id)
{

      return $this->DbQueryOne("
    SELECT * FROM news WHERE id='$id'"
    );
}
}