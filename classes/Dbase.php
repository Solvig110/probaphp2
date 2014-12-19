<?php
class Dbase
{private function config()
{
    return include __DIR__ . '/../config.php';
}


    public  function __construct()
{
    $config =$this-> config();
    mysql_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password']
    );
    mysql_select_db($config['db']['dbname']);
}

public  function DBQuery($sql)
{
   // DBConnect();
    $res = mysql_query($sql);
    if (!$res) {
        echo mysql_error();
        return [];
    }

    $ret = [];
    while ($row = mysql_fetch_assoc($res))
    {
        $ret[] = $row;
    }
    return $ret;
}

public  function DBExec($sql)
{
   // DBConnect();
    $res = mysql_query($sql);
    if (!$res) {
        echo mysql_error();
        return false;
    }

}


public function DbQueryOne($sql) {
    return $this-> DBQuery($sql)[0];
}


}

