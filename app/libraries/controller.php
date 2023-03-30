<?php
require_once('/var/www/html/MYSITE/app/models/doctor.php');
require_once('/var/www/html/MYSITE/app/config/config.php');
class Controller{
   
    public function loadModel(string $model){

        
        return new $model();


    }
    public function render($link,$data){ 
        require_once(APPROOT."$link");
    }



}






?>