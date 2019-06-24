<?php
namespace App\Models;
require_once 'BaseElement.php';

class Job extends BaseElement{

    //constructor propio de la clase job (hija)
    public function __construct($title,$descrption){
        //llamar contructor de la clase padre
        $newTitle = 'JOB: '.$title;
        parent::__construct($newTitle,$descrption);
    }
    
    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        return "job duration: $years years $extraMonths months";
        }

  
}
?>