<?php
class AddRucToPersonas extends CakeMigration {

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
				'personas' => array(
					'ruc' => array('type' => 'string', 'null' => false, 'default' => NULL),
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
