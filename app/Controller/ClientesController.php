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
    
   // debug($divisiones);
    //$division = New Division()
    $this->set('cargos', $this->Cliente->Cargo->find('list', array('fields'=>array('id','nombre')))); 
    $this->set('divisiones', $this->Cliente->Division->find('list', array('fields'=>array('id','nombre')))); 
    $this->set('categorias', $this->Cliente->Categoria->find('list', array('fields'=>array('id','nombre')))); 
    $this->set('zonas', $this->Cliente->Zona->find('list', array('fields'=>array('id','nombre')))); 
    $this->set('especializaciones', $this->Cliente->Especializacion->find('list', array('fields'=>array('id','nombre')))); 
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
            $this->Session->setFlash('Cliente ha sido actualizado satisfactoriamente.');
            $this->redirect(array('action' => 'index'));
          } 
        else 
          {
            $this->Session->setFlash('No se pudo leer el Cliente.');
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
          $this->Session->setFlash('La Cliente con id: ' . $id . ' ha sido eliminado.');
          $this->redirect(array('action' => 'index'));
        }
    }

  
}
