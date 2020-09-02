<?php

require './models/user.php';
require './models/plan.php';
require './models/classRecord.php';

  class Router {
    //get list of entitys
    private $entitys = [ 'user' => 'User', 'plan' => 'Plan', 'classRecord' => 'ClassRecord' ];

    public function requestRouter( $requestData ) {
      if( $requestData['REQUEST_METHOD'] == 'GET' ){
        $params = $requestData['REQUEST_PARAMS'];

        if( array_key_exists( 'entity', $params ) ){
          //check is entity is permited...
          $this->routerByClass( $params['entity'], $params );
        }else{
          echo '{"access":true, "method":"GET", "error": "Entity param is empty." }';die;
        }

      }
        //var_dump($_GET);die;
        //echo '{"access":true, "method":"GET", "params":' .$params. '}';die;
    }

    //routers by Class
    private function routerByClass( $entity, $params ){
      if( array_key_exists( 'action', $params ) ){
        switch( $entity ){
          case 'user':
            $user = New User();
            if( $params['action'] == 'login' ){
              $user->login( '111', '123' );
            }else {
              echo '{"access":true, "method":"GET", "error": "This action not supported" }';die;
            }
            break;
          case 'plan':
            $plan = new Plan();

            if( $params['action'] == 'getPlan' ){
              $plan->getPlan( '20192', '1' );

            }else if( $params['action'] == 'insertPlan' ){
              $plan->insertPlan( '20192', '1', 'aaa' );
            }else {
              echo '{"access":true, "method":"GET", "error": "This action not supported" }';die;
            }

            break;
          case 'classRecord':
            $classRecord = new ClassRecord();

            if( $params['action'] == 'insertClassRecord' ){
              $classRecord->insertClassRecord( '20192', '1', 2, 'aaaa' );
            }else if( $params['action'] == 'getHours' ){
              $classRecord->getHours( '20192', '1' );
            }else {
              echo '{"access":true, "method":"GET", "error": "This action not supported" }';die;
            }
            
            break;
          default:
            echo '{"access":true, "method":"GET", "error": "This entity not permited" }';die;
            break;
        }
      }else{
        echo '{"access":true, "method":"GET", "error": "Param ACTION not found." }';die;
      }
    }

  }

?>