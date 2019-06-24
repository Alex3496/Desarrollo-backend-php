<?php

  require 'app/Models/Job.php';
  require 'app/Models/Proyect.php';
  require_once 'app/Models/printable.php';

  require 'librerias/Proyect.php';

  //s especeifica que se esta usando
  use App\Models\Job;
  use App\Models\{Proyect,BaseElement,printable};
  $limitMonths = 122;


  $trabajo = new Job('php Developer','esta meh!!');
  $trabajo -> months = 12;

  $trabajo2 = new Job('phyton Developer','esta mejor que php!!');
  $trabajo2 -> months = 15;

  $trabajo3 = new Job('','esta mejor que php!!');
  $trabajo3 -> months = 15;


  $proyect1 = new Proyect('Devops','meh!!');

  $proyectlib = new lib1\Proyect();

  $jobs = [
    $trabajo,
    $trabajo2,
    $trabajo3
  ];

  $proyects=[
    $proyect1
  ];




//Esta funcion es llamada en el idex, tiene como parametro el arreglo de jobs, que contiene 
//objetos de la clase job
  function printElement(Printable $job)
  {
  if ($job -> visible ==false){
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>'.$job->getTitle().'</h5>';
  echo '<p>'.$job->getDescription().'</p>';
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
