<?php 
 
 class SiteController{
    public function home(){
        require_once('views/templates/header.php');
        require_once('views/site/home.php');
        require_once('views/templates/footer.php');
    }

 }