<?php

App::uses('Controller', 'Controller');

class ClientesController extends AppController {
	public $name = "Clientes";
	public $helpers = array('Html', 'Form');

	public function index(){

		$this->set("title_for_layout","Clientes");
		if(isset($this->data['Cliente']['choice']) &&  isset($this->data['Cliente']['criteria'])){
			$buildResult = $this->search($this->data['Cliente']['choice'],$this->data['Cliente']['criteria']);
			$this->set('Clientes',$buildResult  );
		}else{
			$this->set('Clientes', $this->Cliente->find('all', array('order' => array(
					'Cliente.id' => 'ASC',
					'Persona.tipo_de_persona' => 'ASC'
			)

			)
			)
			);
		}


	}

	public function search($choice=null,$criteria=null) {
		if ($choice=='cedula'){
			return  $this->Cliente->Persona->findAllByCedulaOrRuc($criteria,$criteria); //array of conditions$criteria);
		}
		if ($choice=='name'){
			
			$conditions = array("OR" => array("Persona.primer_nombre LIKE" => $criteria, "Persona.segundo_nombre LIKE" => $criteria,"Persona.primer_apellido LIKE" => $criteria,"Persona.segundo_apellido LIKE" => $criteria));
			return  $this->Cliente->Persona->find('all',array('conditions' => $conditions));
// 			return  $this->Cliente->Persona->findAllByPrimer_nombreOrSegundo_nombreOrPrimer_apellidoOrSegundo_apellido($criteria,$criteria,$criteria,$criteria);
		}
		if ($choice=='razonSocial'){
			$conditions =  array("Cliente.nombre_razon_social LIKE" => "%".$criteria."%");
			return  $this->Cliente->find('all',array('conditions'=>$conditions));
		}
		if ($choice=='city'){
			return $this->Cliente->findAllByCiudad($criteria);
		}
		if ($choice=='zone'){
			return $this->Cliente->findAllByZona_id($criteria);
		}
		if ($choice=='especiality'){
// 			exit(debug($this->Cliente->Especializacion->findAllByNombre($criteria)));
		$i=0;
		$clientesId = array();
			foreach( $this->Cliente->Especializacion->findAllByNombre($criteria) as $cliente){
				array_push($clientesId,$cliente['Cliente']['id']);
			}
			
			$conditions =  array("Cliente.id" => $clientesId);
			return  $this->Cliente->find('all',array('conditions'=>$conditions));
			
		}
		return	array();
	}

	public function view($id = null) {
		$this->Cliente->id = $id;
		$this->set('cliente', $this->Cliente->read());
		$this->set("title_for_layout", $this->Cliente->getNombreCompletoORazonSocial());
	}

	public function add() {
		// 		debug($this->request->is);

		// debug($divisiones);
		//$division = New Division()
		$this->set('cargos', $this->Cliente->Cargo->find('list', array('fields'=>array('id','nombre'))));
		$this->set('divisiones', $this->Cliente->Division->find('list', array('fields'=>array('id','nombre'))));
		$this->set('categorias', $this->Cliente->Categoria->find('list', array('fields'=>array('id','nombre'))));
		$this->set('zonas', $this->Cliente->Zona->find('list', array('fields'=>array('id','nombre'))));
		$this->set('especializaciones', $this->Cliente->Especializacion->getListEspecializaciones());
		$this->set('personasNaturales', $this->Cliente->Persona->getCedulaNombre()); // natural
		$this->set("title_for_layout", "Nuevo Cliente");
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
		$this->request->data['Cliente']['id'] = $id;
		$this->set('cargos', $this->Cliente->Cargo->find('list', array('fields'=>array('id','nombre'))));
		$this->set('divisiones', $this->Cliente->Division->find('list', array('fields'=>array('id','nombre'))));
		$this->set('categorias', $this->Cliente->Categoria->find('list', array('fields'=>array('id','nombre'))));
		$this->set('zonas', $this->Cliente->Zona->find('list', array('fields'=>array('id','nombre'))));
		$this->set('especializaciones', $this->Cliente->Especializacion->getListEspecializaciones());
		$this->set('personasNaturales', $this->Cliente->Persona->getCedulaNombre()); // natural
		$parent_especializacion = $this->Cliente->Especializacion->getParentEspecializacion($this->request->data['Cliente']['id']);
		$this->set('parent_especializacion', $parent_especializacion);
		// 		$new_especializacion = $this->Cliente->Especializacion->getListEspecializaciones($parent_especializacion);
		// 		$this->set('especializaciones2', $new_especializacion);
		//  		exit(debug($this->Cliente->Persona->id));
		$cliente_completo = $this->Cliente->read();
		$persona_id = $cliente_completo['Persona']['id'];
		$this->set("title_for_layout", $this->Cliente->getNombreCompletoORazonSocial());
		$this->request->data['Persona']['id'] = $persona_id;

		//exit(debug($this));
		if ($this->request->is('get'))
		{
			$this->request->data = $this->Cliente->read();
		}
		else
		{
			if ($this->Cliente->saveAll( $this->request->data, array('validate'=>'first')))
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

	public function change_especializacion(){
		$this->autoLayout = false;
		$new_especializacion = $this->Cliente->Especializacion->getListEspecializaciones($this->params['url']['id']);
		$this->set('especializaciones', $new_especializacion);
	}

	public function getCliente(){
		$persona = $this->Cliente->Persona->findByCedula($this->params['url']['id']);
		$htmlExport = "Nombre: ".$persona['Persona']['primer_nombre']." ".$persona['Persona']['segundo_nombre']." ".$persona['Persona']['primer_apellido']." ".$persona['Persona']['segundo_apellido']."\r";
		$htmlExport .= "Cedula: ".$persona['Persona']['cedula']."\r";
		$htmlExport .= "Dirección Cliente: ".$persona['Cliente']['direccion_calle_principal']." ".$persona['Cliente']['numeracion_nueva']." y ".$persona['Cliente']['calle_secundaria']."\r";
		echo $htmlExport .= "Teléfono casa: ".$persona['Persona']['telefono_casa']." Teléfono oficina: ".$persona['Persona']['telefono_oficina'];
		die();
	}



}
