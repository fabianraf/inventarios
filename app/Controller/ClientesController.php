<?php

App::uses('Controller', 'Controller');

class ClientesController extends AppController {
	public $name = "Clientes";
	public $helpers = array('Html', 'Form');


	public function index(){
		//$this->controller->helpers[] = "AppHelper";
		$this->set("title_for_layout","Clientes");
    if(isset($this->data['Cliente']['choice']) &&  isset($this->data['Cliente']['criteria'])){
			$buildResult = $this->search($this->data['Cliente']['choice'], $this->data['Cliente']['criteria']);
      if(is_numeric($this->data['Cliente']['criteria']) && $this->data['Cliente']['choice'] == 'especialidad'){
        $especializacion = $this->Cliente->Especializacion->find('first', array('fields' => array(('nombre'),),
                                        'conditions' => array('Especializacion.id' => $this->data['Cliente']['criteria'])
                                        )
                        );
      }
      if(isset($especializacion))
        $this->set('criteria_especializacion', $especializacion['Especializacion']['nombre']);
      $this->set('Clientes', $buildResult);
		}else{
			$data = $this->paginate('Cliente');
			//$sorted_data = Set::sort($data, '{n}.Persona.tipo_de_persona', 'ASC');
			$this->set('Clientes', $data);


			//			$this->set('Clientes', $this->Cliente->find('all', array('order' => array(
			//					'Cliente.id' => 'ASC',
			//					'Persona.tipo_de_persona' => 'ASC')))
			//			);
		}


	}

	public function search($choice=null, $criteria=null) {
		//$this->autoLayout = false;
		$conditions = NULL;
		if ($choice=='cedula'){
			$conditions = array("OR" => array("Persona.cedula LIKE" => "%" . $criteria . "%", "Persona.ruc LIKE" => "%" . $criteria . "%"));
		}
		if ($choice=='name'){
			$conditions = array("OR" => array("Persona.primer_nombre LIKE" => "%".$criteria."%", "Persona.segundo_nombre LIKE" => "%".$criteria."%","Persona.primer_apellido LIKE" => "%".$criteria."%","Persona.segundo_apellido LIKE" => "%".$criteria."%"));
		}
		if ($choice=='razonSocial'){
			$conditions =  array("Cliente.nombre_razon_social LIKE" => "%".$criteria."%");
		}
		if ($choice=='city'){
			$conditions = array("Cliente.ciudad LIKE" => "%".$criteria."%");
			//return $this->Cliente->findAllByCiudad($criteria);
		}
		if ($choice=='zone'){
			$conditions = array("Cliente.zona_id = " => $criteria);
		}
		if ($choice=='especialidad'){
			$conditions = array("Cliente.especializacion_id = " => $criteria);
		}
		//if ($choice=='especiality'){
		//  $conditions = array("Especializacion.nombre LIKE" => "%".$criteria."%");
		//		$i=0;
		//		$clientesId = array();
		//			foreach( $this->Cliente->Especializacion->findAllByNombre($criteria) as $cliente){
		//				array_push($clientesId,$cliente['Cliente']['id']);
		//			}
		//
		//			$conditions =  array("Cliente.id" => $clientesId);
		//			return  $this->Cliente->find('all',array('conditions'=>$conditions));
			
		//}
		if($conditions == NULL)
			return array();
		else{
			$this->paginate = array(
					'conditions' => $conditions,
			);
			$clientes = $this->paginate('Cliente');
			return $clientes;
		}

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
		$this->set('especializaciones', $this->Cliente->Especializacion->find('list', array('fields'=>array('id','nombre'))));
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
		$this->set('especializaciones', $this->Cliente->Especializacion->find('list', array('fields'=>array('id','nombre'))));
		$this->set('personasNaturales', $this->Cliente->Persona->getCedulaNombre()); // natural
		$parent_especializacion = $this->Cliente->Especializacion->getParentEspecializacion($this->request->data['Cliente']['id']);
		$this->set('parent_especializacion', $parent_especializacion);
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
			$this->deleteAttachmentInfo($this->request->data('Cliente.id'),$this->request->data('Attachment.dir'));
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
	public function deleteAttachmentInfo($id,$dir){
		echo "id".$id;
		echo "dir".$dir;
		die();
		// 			echo $this->request->data('Attachment.id');
		// 			$this->Attachment->delete($this->request->data('Attachment.id'));
		$this->Cliente->Attachment->deleteAll(array('Attachment.foreign_key' => $id));
		$folder = new Folder('files/attachment/attachment/'.$dir);
			
		if ($folder->delete());

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

	public function getCliente(){
		$persona = $this->Cliente->Persona->findByCedula($this->params['url']['id']);
		$htmlExport = "Nombre: ".$persona['Persona']['primer_nombre']." ".$persona['Persona']['segundo_nombre']." ".$persona['Persona']['primer_apellido']." ".$persona['Persona']['segundo_apellido']."\r";
		$htmlExport .= "Cedula: ".$persona['Persona']['cedula']."\r";
		$htmlExport .= "Dirección Cliente: ".$persona['Cliente']['direccion_calle_principal']." ".$persona['Cliente']['numeracion_nueva']." y ".$persona['Cliente']['calle_secundaria']."\r";
		echo $htmlExport .= "Teléfono casa: ".$persona['Persona']['telefono_casa']." Teléfono oficina: ".$persona['Persona']['telefono_oficina'];
		die();
	}

	public $paginate = array(
			'limit' => 10,

	);

  
  public function show_especializaciones(){
    $this->autoLayout = false;
    $this->set('especializaciones', $this->Cliente->Especializacion->find('list', array('fields'=>array('id','nombre'))));
  }

}
