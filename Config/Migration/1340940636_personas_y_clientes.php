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
					'persona_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'after' => 'id'),
					'nombre_razon_social' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'after' => 'persona_id'),
					'especializacion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'after' => 'nombre_razon_social'),
					'segundo_apellido' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'after' => 'especializacion'),
					'division_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'after' => 'segundo_apellido'),
					'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'after' => 'division_id'),
					'zona_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'after' => 'categoria_id'),
					'credito_aprobado' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'after' => 'zona_id'),
					'forma_pago' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'after' => 'credito_aprobado'),
					'contacto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'after' => 'forma_pago'),
					'horario_atencion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'after' => 'contacto'),
					'croquis_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'after' => 'horario_atencion'),
					'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
          'clientes' => array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'nombre_razon_social' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'especializacion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'segundo_apellido' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'division_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'zona_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'credito_aprobado' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'forma_pago' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'contacto' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'horario_atencion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'croquis_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1),
        ),
        
				),
			),
        
        
		),
		'down' => array(
			)
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
