<?php

class Router {
   public static function analyze( $query ) {
      $result = array(
         "controller" => "Error",
         "action" => "error404",
         "params" => array()
      );

      // QUICK EXAMPLE OF ROUTING

      
      if( $query === "" || $query === "/" ) {
         $result["controller"] = "Index";
         $result["action"] = "display";
      } else {

         $parts = explode("/", $query);

         if( $parts[0] === "Search" || $parts[0] === "search"){
            $result["controller"] = "Search";
            $result["action"] = "display";
            $result["params"]["keyword"] = htmlspecialchars($_GET['q']);
         }

      }

      return $result;
   }

}