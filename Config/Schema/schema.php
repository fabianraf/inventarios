<?php 
class InventariosSchema extends CakeSchema {
	var $name = 'Inventarios';
	
	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	var $personas = array(
			'id' => array("type" => "integer", "null" => FALSE, "key" => "primary"),
			'primer_nombre' => array("type" => "string", "default" => null, "lenght" => "255"),
			'segundo_nombre' => array("type" => "string", "default" => null, "lenght" => "255"),
			'primer_apellido' => array("type" => "string", "default" => null, "lenght" => "255"),
			'segundo_apellido' => array("type" => "string", "default" => null, "lenght" => "255"),
			'telefono_casa' => array("type" => "string", "default" => null, "lenght" => "20"),
			'telefono_oficina' => array("type" => "string", "default" => null, "lenght" => "20"),
			'celular' => array("type" => "string", "default" => null, "lenght" => "20"),
			'direccion' => array("type" => "string", "default" => null, "lenght" => "255"),
			'email' => array("type" => "string", "default" => null, "lenght" => "50"),
			'otro' => array("type" => "text", "default" => null),
			);
}
