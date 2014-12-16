<?php

class storage implements Countable, Iterator

{ private $__data=[];


    public function __set($key,$value){

     $this->__data[$key] = $value;
    }

    public function __get($key) {

        return $this->__data[$key];
    }

        public function count() {

       return count($this->__data);
            }


    public function __construct() {
        $this->__data=$a;
    }
    public function rewind() {
      //  echo "перемотка в начало\n";
        return($this->_data);


    }

    function current() {

        $__data = current($this->__data);
        //echo "текущий: $__data\n";
        return  $__data;

    }

     function key() {


         $__data = key($this->__data);
        // echo "ключ: $__data\n";
        return  $__data;


     }

    function next() {


        $__data = next($this->__data);
       // echo "следующий: $__data\n";
        return  $__data;

    }

     function valid() {

         $key = key($this->__data);
         $__data= ($key !== NULL && $key !== FALSE);
     //    echo "верный: $__data\n";
         return $__data;


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



