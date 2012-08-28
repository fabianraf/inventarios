<?php
class PersonasYClientes extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
  
  public $migration = array(
		'up' => array(
			'create_table' => array(
				'personas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'primer_nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'segundo_nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'primer_apellido'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'segundo_apellido'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'direccion'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'telefono_casa'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'telefono_oficina'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'celular'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'email'=> array('type' => 'string', 'null' => false, 'default' => NULL),
					'otro'=> array('type' => 'text', 'null' => false, 'default' => NULL),
					),
				'clientes' => array(
          'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
          'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null),
          'nombre_razon_social' => array('type' => 'string', 'null' => true, 'default' => null),
          'especializacion' => array('type' => 'string', 'null' => true, 'default' => null),
          'division_id' => array('type' => 'integer', 'null' => false, 'default' => null),
          'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null),
          'zona_id' => array('type' => 'integer', 'null' => false, 'default' => null),
          'credito_aprobado' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
          'forma_pago' => array('type' => 'string', 'null' => true, 'default' => null),
          'contacto' => array('type' => 'string', 'null' => true, 'default' => null),
          'horario_atencion' => array('type' => 'string', 'null' => true, 'default' => null),
          'croquis_id' => array('type' => 'integer', 'null' => false, 'default' => null),
          'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1),
          ),
				),
        
        
			),
		),
		'down' => array(
			
		),
	);
  
  

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
