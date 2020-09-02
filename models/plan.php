<?php
  class Plan {

    private $listPlan = [ '0' => ['period' => 20192, 'classId' => 1, 'closePlanOk' => true ], '1' => ['period' => 20192, 'classId' => 2, 'closePlanOk' => false] ];

    public function getPlan( $period, $classId ){
      //var_dump($listPlan);die;
      if( $period == $this->listPlan[0]['period'] && $classId == $this->listPlan[0]['classId'] ){
          echo $this->listPlan[0]['closePlanOk'];
      }else if( $period == $this->listPlan[1]['period'] && $classId == $this->listPlan[1]['classId'] ){
          echo $this->listPlan[1]['closePlanOk'];
      }else{
          echo '{"error":"plan not found in list."}';
      }
  
    }

    public function insertPlan( $period, $classId, $contentPlan ){
      //var_dump($listPlan);die;
      if( $period == $this->listPlan[0]['period'] && $classId == $this->listPlan[0]['classId'] && $contentPlan != "" ){
          echo true;
      }else if( $period == $this->listPlan[1]['period'] && $classId == $this->listPlan[1]['classId'] && $contentPlan != "" ){
          echo true;
      }else{
          echo false;
      }
  
    }

  }
?>