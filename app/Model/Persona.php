<?php
class Persona extends AppModel {
	
	public $name = 'Persona';
  public $hasOne = 'Cliente';
	public $validate = array(
        'primer_nombre' => array(
            'rule' => 'validateDependentFields'
        ),
        'primer_apellido' => array(
            'rule' => 'validateDependentFields'
        ),
        'segundo_apellido' => array(
            'rule' => 'validateDependentFields'
        ),
        'cedula' => array(
          'rule'    => array('minLength', '10',
                             'maxLength', '10'
                             ),
          'message' => 'Debe contener 10 caracteres.' 
        ),
        'telefono_oficina' => array(
          'rule' => 'notEmpty'  
        ),
        'celular' => array(
          'rule' => 'notEmpty'  
        ),
    );
	public $virtualFields = array(
			'nombre_completo' => 'CONCAT(Persona.primer_nombre, " ", Persona.primer_apellido)'
	);
  
  function validateDependentFields($field){
    $passed=true;
    switch(true){
        case array_key_exists('primer_nombre',$field):
            if( $this->data['Persona']['tipo_de_persona'] == 0 && (!isset($this->data['Persona']['tipo_de_persona']) or empty($this->data['Persona']['tipo_de_persona'])) ){
                $passed=false;
            }else{                 
                $passed=true;
            }
        case array_key_exists('primer_apellido',$field):
            if( $this->data['Persona']['tipo_de_persona'] == 0 && (!isset($this->data['Persona']['tipo_de_persona']) or empty($this->data['Persona']['tipo_de_persona'])) ){
                $passed=false;
            }else{                 
                $passed=true;
            }
        case array_key_exists('segundo_apellido',$field):
            if( $this->data['Persona']['tipo_de_persona'] == 0 && (!isset($this->data['Persona']['tipo_de_persona']) or empty($this->data['Persona']['tipo_de_persona'])) ){
                $passed=false;
            }else{                 
                $passed=true;
            }
        break;
    }
    return $passed;
  }
	
	
}