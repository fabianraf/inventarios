<?php
class Persona extends AppModel {
	
	public $name = 'Persona';
	public $validate = array(
        'primer_nombre' => array(
            'rule' => 'notEmpty'
        ),
        'primer_apellido' => array(
            'rule' => 'notEmpty'
        )
    );
	public $virtualFields = array(
			'nombre_completo' => 'CONCAT(Persona.primer_nombre, " ", Persona.primer_apellido)'
	);
	
	
}
