<?php
class AnadirCamposAClientes extends CakeMigration {

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
			'create_field' => array(
				'clientes' => array(
					'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'representante_legal' => array('type' => 'string', 'null' => true),
					'contacto_pedidos' => array('type' => 'string', 'null' => true),
					'contacto_cobros' => array('type' => 'string', 'null' => true),
					'direccion_calle_principal' => array('type' => 'string', 'null' => true),
					'numeracion_nueva' => array('type' => 'string', 'null' => true),
					'calle_secundaria' => array('type' => 'string', 'null' => true),
					'referencia' => array('type' => 'string', 'null' => true),
					'factura_a_nombre_de' => array('type' => 'string', 'null' => true),
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
