<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['controller'])) {
  require_once('controllers/SiteController.php');
  $SiteController = new SiteController();
  $SiteController->home();
} else {
  switch ($_REQUEST['controller']) {
    case 'produt':
      require_once('controllers/ProdutsController.php');
      $ProdutsController = new ProdutsController();
      if (!isset($_GET['action'])) {
      } else {
        switch ($_REQUEST['action']) {
          case 'produtsRegister':
            $ProdutsController->produtsRegister();
            break;
          case 'produtsRegisterAction':
              $ProdutsController->produtsRegisterAction();
              break;
          case 'produtsView':
            $ProdutsController->produtsView();
            break;
          case 'listProduts':
           
            $ProdutsController->listProduts();
            
            break;
        }
      }
  }
}
