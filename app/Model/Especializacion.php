<?php
class Especializacion extends AppModel {
	
	public $name = 'Especializacion';
  public $useTable = 'especializaciones';
  public $hasOne = 'Cliente';
  
  public function getListEspecializaciones($id=0) {
        $conditions = array( 'fields' => array('id', 'nombre'),
            'conditions' => array('Especializacion.parent_id' => $id)
        );
        return $this->find('list', $conditions);
    }
    
  public function getParentEspecializacion($cliente_id){
    $esp_id = $this->Cliente->find('first', array('fields' => array(('especializacion_id'),),
                                        'conditions' => array('Cliente.id' => $cliente_id)
                                        )
                        );
    $parent_id = $this->find('first', array('fields' => array('parent_id'),
                                      'conditions' => array('Especializacion.id' => $esp_id['Cliente']['especializacion_id'])));
    return $parent_id['Especializacion']['parent_id'];
  }
  
}
