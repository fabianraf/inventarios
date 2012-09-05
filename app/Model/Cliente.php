<?php
class Cliente extends AppModel {
	
	public $name = 'Cliente';
  public $belongsTo = array(
                      'Persona' => array(
                          'className'    => 'Persona',
                          'foreignKey'   => 'persona_id'
                      ));
	

	
	
}
