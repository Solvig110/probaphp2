<?php


require __DIR__ . '/storage.php';
class View extends storage{
 public $path;
 public function __construct($path){

       $this->path = $path;
     }
    public function display($template)
    {

        ob_start();
            foreach ($this as $key => $value) {
                $$key = $value;
            }
                include $this->path.'/'.$template;
        $ret = ob_get_contents();
       ob_get_clean();
        return $ret;

    }
 }
$news = new News();
$view = new View();

/*class view
    extends storage
{
      private $path;
    public function __construct($path) {
              $this->path = $path;
   }

   public function display($template) {
              $news = [];
     if(count($this->__data) > 1) {
                     foreach ($this->__data as $key => $value) {
                            $news[] = $value;
        }
     }
       if(count($this->__data) == 1) {
                       foreach ($this->__data as $key => $value) {
                               $article = $value;
           }
       }

        ob_start();
        include $this->path . $template;

        $res = ob_get_contents();
       ob_end_flush();
        return $res;
    }


    public function render($template) {
               ob_start();
       include $this->path . $template;
       $res = ob_get_contents();
        ob_end_clean();
        return $res;
    }
}






Status
API
Training
Shop
Blog
About

/*require_once 'storage.php';
class View extends Storage {

  private $path;
   public function __construct($path) {

      parent::__construct();

        $this->path = $path;      }

   public function display($template)
    {
       foreach($this as $key => $value){


            $key = $value;
        }
       ob_start();
       require $this->path . $template;          return ob_get_clean ();
    }


}*/
