<?php

class storage implements Countable, Iterator

{ protected $__data=[];

//для каунт
    public function __set($key,$value){

     $this->__data[$key] = $value;
    }

    public function __get($key) {

        return $this->__data[$key];
    }

        public function count() {

       return count($this->__data);
            }
//для итератора

   // public function __construct() {
        //$this->__data=$a;
   // }
    public function rewind() {
      //  echo "перемотка в начало\n";

        reset($this->__data);


    }

    function current() {

       // $__data = current($this->__data);
        //echo "текущий: $__data\n";

        return   current ($this->__data);

    }

     function key() {


         return  key($this->__data);
        // echo "ключ: $__data\n";



     }

    function next() {


        return  next($this->__data);
       // echo "следующий: $__data\n";


    }

     function valid() {

       //  $key = key($this->__data);
       //  $__data= ($key !== NULL && $key !== FALSE);
     //    echo "верный: $__data\n";
         // проверяем мы в массиве или нет проверка что вернула функция не null
         return  null !==key($this->__data);


     }
 }


$test= new storage();
$test->cvb='5';
$test->cdf='10';
$test->avb='365';
$test->zxc='3659';
//echo count($test);

foreach($test as $key => $value) {
  //  var_dump($key, $value);
    //echo "\n";

    echo $key . ' => ' . $value . '<br>';
 }

// вопрос - порядок в итераторе важен?

 class view
    extends storage
 {
     public function display ($template)
    {
        foreach ($this as $k=>$v) {
            $$k = $v;
        }

    require $template;
    }

 }
$view=new View();
$view->articles=
    [
    ['title'=>'первая новость','text'=>'текст первой новости'],

    ['title'=>'вторая новость','text'=>'текст второй новости'],

];
$view->display('index.php');