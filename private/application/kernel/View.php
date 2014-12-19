<?php

class View {
   protected $_route;
   protected $data = array();

   public function __construct( $route ) {
      $this->_route = $route;
   }

   public function display() {
      $viewFile = ROOT . "/application/view/" . $this->_route["controller"] . "/" . $this->_route["action"] . ".html";

      $header   = ROOT . "/application/view/header.php";
      $footer   = ROOT . "/application/view/footer.php";

      if( file_exists( $viewFile ) ){
         include($header);
         include($viewFile);
         include($footer);
      } else{
         //throw new DomainException("View not found - " . $viewFile);
      }
   }

   public function __set($key, $value) {
      $this->data[$key] = $value;
   }
   
   public function __get($key) {
      return $this->data[$key];
   }


}

