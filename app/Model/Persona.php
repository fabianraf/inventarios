<?php
class Persona extends AppModel {

	public $name = 'Persona';
	public $hasOne = 'Cliente';
	private $concatNames = true;
	public $validate = array(
			'primer_nombre' => array(
					'validateprimer_nombre' => array('rule' => array('validatePrimerNombre', 'primer_nombre'), 'message' => 'Ingrese primer nombre.' ),
			),
			'primer_apellido' => array(
					'validateprimer_apellido' => array('rule' => array('validatePrimerApellido', 'primer_apellido'), 'message' => 'Ingrese primer apellido.' ),
			),
			'segundo_apellido' => array(
					'validatesegundo_apellido' => array('rule' => array('validateSegundoApellido', 'segundo_apellido'), 'message' => 'Ingrese segundo apellido.' ),
			),
			'cedula' => array(
					'rule'    => array('minLength', '10',
							'maxLength', '10'
					),
					'message' => 'Debe contener 10 caracteres.'
			),
			'telefono_oficina' => array(
					'rule' => 'notEmpty',
					'message' => 'Ingrese telefono de oficina.'
			),
			'celular' => array(
					'rule' => 'notEmpty',
					'message' => 'Ingrese telefono de oficina.'
			),
	);
	public $virtualFields = array(
			'nombre_completo' => 'CONCAT(Persona.primer_nombre, " ", Persona.primer_apellido)'
	);

	function validatePrimerNombre(){
		//exit(debug($field['primer_nombre']));
		$passed=true;
		if( $this->data['Persona']['tipo_de_persona'] == 0 && $this->data['Persona']['primer_nombre'] == ""){
			$passed=false;
		}else{
			$passed=true;
		}
		return $passed;
	}
	function validatePrimerApellido(){
		//exit(debug($field['primer_nombre']));
		$passed=true;
		if( $this->data['Persona']['tipo_de_persona'] == 0 && $this->data['Persona']['primer_apellido'] == ""){
			$passed=false;
		}else{
			$passed=true;
		}
		return $passed;
	}
	function validateSegundoApellido(){
		//exit(debug($field['primer_nombre']));
		$passed=true;
		if( $this->data['Persona']['tipo_de_persona'] == 0 && $this->data['Persona']['segundo_apellido'] == ""){
			$passed=false;
		}else{
			$passed=true;
		}
		return $passed;
	}

	function obtenerTipoDePersona($tipo_de_persona){
		if($tipo_de_persona == 0 ){
			$tipo_de_persona_texto = "Natural";
		}else{
			$tipo_de_persona_texto = "Jurídica";
		}
		return $tipo_de_persona_texto;
	}

	function afterFind($results)
	{
// 		exit(debug($results));
			foreach($results as &$entry) {
				if (isset($entry[$this->alias]['tipo_de_persona'])){
					$entry[$this->alias]['tipo_de_persona_texto'] = $this->obtenerTipoDePersona($entry[$this->alias]['tipo_de_persona']);
				}
				if ($this->concatNames){
					$entry['Persona']['primer_nombre'] = $entry['Persona']['primer_nombre'].' '.$entry['Persona']['primer_apellido'];
				}
			}
		return $results;
	}

	public function getCedulaNombre($tipoDePersona=0) {
		$conditions = array( 'fields' => array('primer_apellido','primer_nombre', 'cedula'),
				'conditions' => array('Persona.tipo_de_persona' => $tipoDePersona )
		);
		$results = $this->find('list', $conditions);
		$res = array();
		foreach($results as $key=>$val) {
			foreach($val as $data) {
				$res[$key]=$data;
			}
		}
		return $res;
		
	}

}
