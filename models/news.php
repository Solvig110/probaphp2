<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function News_insert($title,$text)
{
return
    DBExec("INSERT INTO `news` (`title`, `text`) VALUES ('$title', '$text')");
}

function One_article ($id)
{

      return DbQueryOne("
    SELECT * FROM news WHERE id='$id'
    ");
}
//var_dump(One_article(3));