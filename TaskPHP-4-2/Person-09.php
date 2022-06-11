<?php
class Person09{
    private $name;
    function setname($name) {
        $this->name = $name;
     }
     function getname() {
         return $this->name;
      }
      function hello($name){
        echo "<script type='text/javascript'>alert('Chào bạn $name ');</script>";
      }
}
?>