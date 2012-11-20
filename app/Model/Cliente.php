<?php
class Cliente extends AppModel {
	
	public $name = 'Cliente';
  public $belongsTo = array(
                      'Persona' => array(
                          'className'    => 'Persona',
                          'foreignKey'   => 'persona_id'
                      ),
                      'Cargo' => array(
                          'className'    => 'Cargo',
                          'foreignKey'   => 'cargo_id'
                      ),
                      'Division' => array(
                          'className'    => 'Division',
                          'foreignKey'   => 'division_id'
                      ),
                      'Categoria' => array(
                          'className'    => 'Categoria',
                          'foreignKey'   => 'categoria_id'
                      ),
                      'Zona' => array(
                          'className'    => 'Zona',
                          'foreignKey'   => 'zona_id'
                      ),
                      'Especializacion' => array(
                          'className'    => 'Especializacion',
                          'foreignKey'   => 'especializacion_id'
                      ),
                      );
	public $validate = array(
        'cargo_id' => array(
            'rule' => 'notEmpty'
        ),
        'contacto_pedidos' => array(
            'rule' => 'notEmpty'
        ),
        'contacto_cobros' => array(
            'rule' => 'notEmpty'
        ),
        'direccion_calle_principal' => array(
          'rule' => 'notEmpty'  
        ),
        'zona_id' => array(
          'rule' => 'notEmpty'  
        ),
    );

	
	
}
