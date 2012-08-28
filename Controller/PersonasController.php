<?php

App::uses('Controller', 'Controller');

class PersonasController extends AppController {
  public $name = "Personas";
  public $helpers = array('Html', 'Form');
  //public $layout= ''; 
  public function index(){
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
            $this->Session->setFlash('Persona ha sido guardada.');
            $this->redirect(array('action' => 'index'));
        } 
      else 
        {
          $this->Session->setFlash('No se pudo leer la Persona.');
        }
    }
  }
  
  
  
  public function edit($id = null) {
    $this->Persona->id = $id;
    if ($this->request->is('get')) 
      {
        $this->request->data = $this->Persona->read();
      } 
    else 
      {
        if ($this->Persona->save($this->request->data)) 
          {
            $this->Session->setFlash('Persona ha sido actualizada con satisfactoriamente.');
            $this->redirect(array('action' => 'index'));
          } 
        else 
          {
            $this->Session->setFlash('No se pudo leer la Persona.');
          }
      }
    }
    
    
    public function delete($id) {
      if ($this->request->is('get')) 
        {
          throw new MethodNotAllowedException();
        }
      if ($this->Persona->delete($id)) 
        {
          $this->Session->setFlash('La persona con id: ' . $id . ' ha sido eliminada.');
          $this->redirect(array('action' => 'index'));
        }
    }

  
}
