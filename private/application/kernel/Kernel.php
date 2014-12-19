<?php

class SpecialistsWeb {
   public static function autoload($class) {
      if(file_exists(ROOT."/application/kernel/$class.php"))
         require_once(ROOT."/application/kernel/$class.php");
      else if(file_exists(ROOT."/application/controller/$class.php"))
         require_once(ROOT."/application/controller/$class.php");
      else if(file_exists(ROOT."/application/model/$class.php"))
         require_once(ROOT."/application/model/$class.php");
   }


   public static function run() {
      spl_autoload_register(array("Kernel", "autoload"));

      $query = isset($_GET["query"]) ? $_GET["query"] : "";
      $route = Router::analyze( $query );

      $class = $route["controller"]."Controller";
      if(class_exists($class)) {
         $controller = new $class ($route);
         $method = array($controller, $route["action"]);
         if( is_callable( $method ))
            call_user_func($method);
      }

   }
   
}
