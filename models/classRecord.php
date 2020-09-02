<?php
  class ClassRecord {
    private $period = '20192';
    private $classId = '1';
    private $hours = 60;

    public function getHours( $period, $classId ){
      echo $this->hours;
    }

    public function insertClassRecord( $period, $classId, $hours, $contentClass ) {
      if( $period == $this->period && $classId == $this->classId && $hours > 0 && $contentClass != '' ){
        echo "true";
      }else{
        echo "false";
      }
    }
  }
?>