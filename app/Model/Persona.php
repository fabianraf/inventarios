<?php
class Persona extends AppModel {

	public $name = 'Persona';
  public $useTable = 'personas';
	public $hasOne = 'Cliente';
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
					'validate_cedula' => array('rule' => array('validatesCedula', 'cedula'), 'message' => 'Ingrese cedula.' ),
					array('rule' => array('validatesLengthCedula', 'cedula'),'message' => 'Debe contener 10 caracteres.'),
					array('rule' => array('validatesUniquenessCedula', 'cedula'),'message' => 'Cedula ya ingresada anteriormente.'),
			),
			'ruc' => array(
					'validate_ruc' => array('rule' => array('validatesRuc', 'ruc'), 'message' => 'Ingrese RUC.' ),
					array('rule' => array('validatesLengthRuc', 'ruc'),'message' => 'Debe contener 13 caracteres.'),
					array('rule' => array('validatesUniquenessRuc', 'ruc'),'message' => 'RUC ya ingresada anteriormente.'),
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


	function validatesUniquenessCedula(){
		//exit(debug($this->data));
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '1')
			return $passed;
    if(isset($this->data['Persona']['id']))
      $resultado = $this->find('all', array(
          'conditions' => array('Persona.cedula' => $this->data['Persona']['cedula'],
                                'Persona.id != ' => $this->data['Persona']['id'])
      ));
    else
      $resultado = $this->find('all', array(
          'conditions' => array('Persona.cedula' => $this->data['Persona']['cedula'])
      ));
    //exit(debug(count($resultado)));
		if( count($resultado) == 0 ) {
			$passed = true;
		}else{
      $passed = false;
		}
		return $passed;
	}

	function validatesUniquenessRuc(){
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '0')
			return $passed;
    if(isset($this->data['Persona']['id']))
      $resultado = $this->find('all', array(
          'conditions' => array('Persona.ruc' => $this->data['Persona']['ruc'],
                                'Persona.id != ' => $this->data['Persona']['id'])
      ));
    else
      $resultado = $this->find('all', array(
          'conditions' => array('Persona.ruc' => $this->data['Persona']['ruc'])
      ));
		//exit(count($resultado));

		if( count($resultado) == 0){
			$passed = true;
		}else{
			$passed = false;
		}
		return $passed;
	}

	function validatesCedula(){
		$passed=true;
		if( $this->data['Persona']['tipo_de_persona'] == 0 && $this->data['Persona']['cedula'] == ""){
			$passed=false;
		}else{
			$passed=true;
		}
		return $passed;
	}

	function validatesRuc(){
		$passed=true;
		if( $this->data['Persona']['tipo_de_persona'] == 1 && $this->data['Persona']['ruc'] == ""){
			$passed=false;
		}else{
			$passed=true;
		}
		return $passed;
	}

	function validatesLengthCedula(){
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '1')
			return $passed;


		if( strlen($this->data['Persona']['cedula']) == 10 ) {
			$passed = true;
		}else{
			$passed = false;
		}
		return $passed;
	}

	function validatesLengthRuc(){
		$passed = true;
		if($this->data['Persona']['tipo_de_persona'] == '0')
			return $passed;


		if( strlen($this->data['Persona']['ruc']) == 13 ) {
			$passed = true;
		}else{
			$passed = false;
		}
		return $passed;
	}


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
		}
		return $results;
	}

	public function getCedulaNombre($tipoDePersona=0) {
		$conditions = array( 'fields' => array( 'cedula','nombre_completo'),
				'conditions' => array('Persona.tipo_de_persona' => $tipoDePersona )
		);
		return $results = $this->find('list', $conditions);

	}
	function esJuridica($tipo_de_persona){
		if($tipo_de_persona == 0 ){
			return true;
		}else{
			return false;
		}
	}


}
