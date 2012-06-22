<?php
class Persona extends AppModel {
	
	public $name = 'Persona';
	
	public $virtualFields = array(
			'nombre_completo' => 'CONCAT(Persona.primer_nombre, " ", Persona.primer_apellido)'
	);
	
	
}
