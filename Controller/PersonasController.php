<?php

App::uses('Controller', 'Controller');

class PersonasController extends Controller {
  var $name = "Personas";
 
  function index()
  {
    $personas = $this->Persona->find('all');
   
    $this->set('Personas', $personas);
    
  }
}
