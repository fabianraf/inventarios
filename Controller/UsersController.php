<?php

App::uses('Controller', 'Controller');

class UsersController extends AppController {
  
  public function login(){
    if($this->request->is('post')){
      if($this->Auth->login()){
        $this->redirect($this->Auth->redirect());
      }
      else{
        $this->Session->setFlash('Nombre de Usuario o Contraseña son incorrectos');
      }
    }
  }
  
  public function logout(){
    $this->redirect($this->Auth->logout());
  }
  
	public function index(){
		$this->User->recursive = 0;
		$this->set('usuarios', $this->User->find('all'));
	}
}
