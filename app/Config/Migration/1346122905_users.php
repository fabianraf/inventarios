<?php
class Usuarios extends CakeMigration {

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
      'users' => array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
        'persona_id' => array('type' => 'string', 'null' => true, 'default' => NULL),
        'cod_usuario' => array('type' => 'string', 'null' => true, 'default' => NULL),
        'email' => array('type' => 'string', 'null' => true, 'default' => NULL),
        'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
        'role' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15),
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
