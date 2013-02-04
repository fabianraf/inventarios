<?php
class Cliente extends AppModel {

	public $name = 'Cliente';
	public $useTable = 'clientes';

  public $hasOne = array(
        'Attachment' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
 //           'conditions' => array(
 //               'Attachment.model' => 'Cliente',
            ),
        ),
    );
  
  public $belongsTo = array(
			'Persona' => array(
					'className'    => 'Persona',
					'foreignKey'   => 'persona_id'
			),
			'Cargo' => array(
					'className'    => 'Cargo',
					'foreignKey'   => 'cargo_id'
			),
			'Division' => array(
					'className'    => 'Division',
					'foreignKey'   => 'division_id'
			),
			'Categoria' => array(
					'className'    => 'Categoria',
					'foreignKey'   => 'categoria_id'
			),
			'Zona' => array(
					'className'    => 'Zona',
					'foreignKey'   => 'zona_id'
			),
			'Especializacion' => array(
					'className'    => 'Especializacion',
					'foreignKey'   => 'especializacion_id'
			),
	);

  
  
 
	public $validate =	array(
			'cargo_id' => array(
					'rule' => 'notEmpty'
			),
			'contacto_pedidos' => array(
					array('rule' => array('optionalOnNatural','contacto_pedidos'),'message' => 'No puede estar vacío.'),
			),
			'contacto_cobros'=> array(
					array('rule' => array('optionalOnNatural','contacto_cobros'),'required'=> 'false','message' => 'No puede estar vacío.'),
			),
			'direccion_calle_principal' => array(
					'rule' => 'notEmpty'
			),
			'zona_id' => array(
					'rule' => 'notEmpty'
			)
	);


	function optionalOnNatural($var=null){
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '0')
			return $passed;

		if (isset($var['contacto_pedidos'])){
			$data = $var['contacto_pedidos'];
		}
		if (isset($var['contacto_cobros'])) {
			$data = $var['contacto_cobros'];
		}

		if( strlen($data) >0 ) {
			$passed = true;
		}else{
			$passed = false;
		}
		return $passed;
	}

	function getNombreCompletoORazonSocial(){
		if($this->data['Persona']['tipo_de_persona'] == 1)
			return $this->data['Cliente']['nombre_razon_social'];
		else
			return $this->data['Persona']['nombre_completo'];
	}
}
