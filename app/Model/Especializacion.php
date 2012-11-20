<?php
class Especializacion extends AppModel {
	
	public $name = 'Especializacion';
  public $useTable = 'especializaciones';
  public $hasOne = 'Cliente';
  
	
}
