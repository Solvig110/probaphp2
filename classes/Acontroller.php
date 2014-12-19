<?php
abstract class AController
{
    public function action($name)
{
    $actionName = 'action'.ucfirst ($name);
    if (method_exists($this, $actionName))
    {
    $this->$actionName();

    }
}}


/*abstract class AController {
5 public function action($name)
6 {
7      $actionName =  'action'.ucfirst($name);
8     if (method_exists($this,$actionName)) {
9
10         $this->$actionName();
11     }
12
13 }
14
15
16
17
18
19
20 }
*/