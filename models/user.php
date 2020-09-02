<?php
  class User {

    public function login( $mat, $psw ){
      if( $mat == "111" && $psw == "123" ){
          echo "true";
      }else{
          echo "false";
      }
    }

  }
?>