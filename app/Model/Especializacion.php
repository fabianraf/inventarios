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
  
}
