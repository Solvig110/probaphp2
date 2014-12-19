<?php
require  __DIR__ . '/Article.php';

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