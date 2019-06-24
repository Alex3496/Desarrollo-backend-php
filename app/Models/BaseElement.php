<?php
namespace App\Models;
require_once 'printable.php';

class BaseElement implements Printable{
    private $title;
    public $descrpcion;
    public $visible = true;
    public $months;

    public function __construct($title,$descrpcion){
        $this -> setTitle($title);
        $this->description = $descrpcion;
    }

    public function setTitle($t){
        if($t== '')
        {
            $this->title = 'N/A';
        }else{
        $this->title = $t;
        }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationAsString(){
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
    return "$years years $extraMonths months";
    }

    public function getDescription(){
        return $this->description;
    }
}
?>