<?php

App::uses('Controller', 'Controller');

class ClientesController extends AppController {
  public $name = "Clientes";
  public $helpers = array('Html', 'Form');
  //public $layout= ''; 
  public function index(){
  	$this->set('Clientes', $this->Cliente->find('all'));
  }
  
  public function view($id = null) {
    $this->Cliente->id = $id;
    $this->set('cliente', $this->Cliente->read());
  }
  
  public function add() {
    debug($this->request->is);
    if(!empty($this->data)){
      if ( $this->Cliente->saveAll( $this->data, array('validate'=>'first'))) 
        {
          $this->Session->setFlash('Cliente ha sido guardado.');
          $this->redirect(array('action' => 'index'));
        }
      else 
        {
          $this->Session->setFlash('No se pudo leer el Cliente.');
        }
    }
  }
  
  
  
  public function edit($id = null) {
    $this->Cliente->id = $id;
    if ($this->request->is('get')) 
      {
        $this->request->data = $this->Cliente->read();
      } 
    else 
      {
        if ($this->Cliente->save($this->request->data)) 
          {
            $this->Session->setFlash('Cliente ha sido actualizada con satisfactoriamente.');
            $this->redirect(array('action' => 'index'));
          } 
        else 
          {
            $this->Session->setFlash('No se pudo leer la Cliente.');
          }
      }
    }
    
    
    public function delete($id) {
      if ($this->request->is('get')) 
        {
          throw new MethodNotAllowedException();
        }
      if ($this->Cliente->delete($id)) 
        {
          $this->Session->setFlash('La Cliente con id: ' . $id . ' ha sido eliminada.');
          $this->redirect(array('action' => 'index'));
        }
    }

  
}
