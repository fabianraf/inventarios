<?php
class Cliente extends AppModel {

	public $name = 'Cliente';
	public $useTable = 'clientes';

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
	public $validate = array('cargo_id' => array(
			'rule' => 'notEmpty'
	),
			'contacto_pedidos' => array(
					array('rule' => array('optionalOnNaturalPedidos', 'contacto_pedidos'),'notEmpty'
					),
					'contacto_cobros' =>
					array('rule' => array('optionalOnNaturalCobros', 'contacto_cobros'),'notEmpty'
					),
					'direccion_calle_principal' => array(
							'rule' => 'notEmpty'
					),
					'zona_id' => array(
							'rule' => 'notEmpty'
					)
			));

	function optionalOnNaturalPedidos(){
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '0')
			return $passed;


		if( strlen($this->data['Persona']['contacto_pedidos']) >0 ) {
			$passed = true;
		}else{
			$passed = false;
		}
		return $passed;
	}
	function optionalOnNaturalCobros(){
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '0')
			return $passed;
	
	
		if( strlen($this->data['Persona']['contacto_cobros']) >0 ) {
			$passed = true;
		}else{
			$passed = false;
		}
		return $passed;
	}
	
}
