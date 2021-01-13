<?php
 class Special extends Table {
     public $special_id = 0;
     public $name = 0;
     public $otdel_id = 0;
     public $active = '1';


    public function validate() {
        return false;   
       }  
 }
?>