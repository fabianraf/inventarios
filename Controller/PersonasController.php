<?php

App::uses('Controller', 'Controller');

class PersonasController extends Controller {
  public $name = "Personas";
 
  public function index()
  {
    //$this->Persona->algo();
  	debug($this->Persona->isVirtualField('nombre_completo'));
  	
    $this->set('Personas', $this->Persona->find('all'));
    
    
  }
  
  
}
