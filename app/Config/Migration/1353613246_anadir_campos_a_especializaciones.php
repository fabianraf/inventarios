<?php
class AnadirCamposAEspecializaciones extends CakeMigration {

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
				'especializaciones' => array(
					'parent_id' => array('type' => 'integer', 'default' => NULL),
					'lft' => array('type' => 'integer', 'default' => NULL),
					'rght' => array('type' => 'integer', 'default' => NULL),
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
