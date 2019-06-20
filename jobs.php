<?php

class Job{
    private $title;
    public $descrpcion;
    public $visible;
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
  }
  
  $trabajo = new Job('php Developer','esta meh!!');
  $trabajo -> visible = true;
  $trabajo -> months = 12;

  $trabajo2 = new Job('phyton Developer','esta mejor que php!!');
  $trabajo2 -> visible = true;
  $trabajo2 -> months = 15;

  $trabajo3 = new Job('','esta mejor que php!!');
  $trabajo3 -> visible = true;
  $trabajo3 -> months = 15;

$jobs = [
    $trabajo,
    $trabajo2,
    $trabajo3
   /* [
        'title' => 'python Developer',
        'descripcion' => 'meh!!',
        'visible' => true,
        'months' => 16
    ],
    [
        'title' => 'Devops',
        'descripcion' => 'meh!!',
        'visible' => false,
        'months' => 5
    ],
    [
        'title' => 'Node Dev',
        'descripcion' => 'meh!!',
        'visible' => true,
        'months' => 24
    ],
    [
        'title' => 'Frontend Dev',
        'descripcion' => 'meh!!', 
        'visible' => true,
        'months' => 19
    ]*/
];


$limitMonths = 122;

//Esta funcion es llamada en el idex, tiene como parametro el arreglo de jobs, que contiene 
//objetos de la clase job
function printJobs($job)
{
  if ($job -> visible ==false){
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>'.$job->getTitle().'</h5>';
  echo '<p>'.$job->descrpcion.'</p>';
  echo '<p>'.$job->getDurationAsString().'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}
?>
