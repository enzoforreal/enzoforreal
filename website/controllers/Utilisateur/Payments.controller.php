<?php
require_once("./controllers/MainController.controller.php");
require_once("./models/Utilisateur/Party.model.php");
require_once('./vendor/autoload.php');


class Payments extends  CoinpaymentsAPI{
 
      private $paymentManager ;
      


    public function callPaymentApi($private_key, $public_key, $format){
          
         $this->paymentManager = new CoinpaymentsAPI($private_key, $public_key, $format); 
    }
}