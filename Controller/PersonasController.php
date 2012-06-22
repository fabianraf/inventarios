<?php

App::uses('Controller', 'Controller');

class PersonasController extends Controller {
  public $name = "Personas";
  public $helpers = array('Html', 'Form');
  //public $layout= ''; 
  public function index(){
    //$this->Persona->algo();
  	debug($this->Persona->isVirtualField('nombre_completo'));
    $this->set('Personas', $this->Persona->find('all'));
  }
  
  public function view($id = null) {
    $this->Persona->id = $id;
    $this->set('persona', $this->Persona->read());
  }
  
  public function add() {
    debug($this->request->is);
    if(!empty($this->data)){
      if ($this->Persona->save($this->request->data)) 
        {
          debug("si");
            $this->Session->setFlash('Persona ha sido guardada.');
            $this->redirect(array('action' => 'index'));
        } 
      else 
        {
          debug("no");
          $this->Session->setFlash('No se pudo leer la Persona.');
        }
    }
  }
  
  
  
  public function edit($id = null) {
    $this->Persona->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Persona->read();
    } else {
        if ($this->Persona->save($this->request->data)) {
            $this->Session->setFlash('Persona ha sido actualizada con satisfactoriamente.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('No se pudo leer la Persona.');
        }
    }
}

  
}
