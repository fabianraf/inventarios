<?php
class Cliente extends AppModel {
	
	public $name = 'Cliente';
  public $belongs_to = array(
                      'Persona' => array(
                          'className'    => 'Persona',
                          'foreignKey'   => 'persona_id'
                      ));
	

	
	
}
