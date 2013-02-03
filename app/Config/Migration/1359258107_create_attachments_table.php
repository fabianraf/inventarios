<?php
class CreateAttachmentsTable extends CakeMigration {

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
				'attachments' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'model' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'attachment' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'dir' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'type' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'size' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
