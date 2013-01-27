<?php $this->Html->script("clientes/busqueda", array("inline"=>false)); ?>
<div class="users index">
	<h2>Clientes</h2>

	<?php echo $this->Form->create('Cliente', array('action'=>'index')); 
	$options=array('cedula'=>'CEDULA/RUC','name'=>'NOMBRE','razonSocial'=>'RAZON SOCIAL', 'city' =>'CIUDAD', 'zone' =>'ZONA', 'especiality' =>'ESPECIALIDAD');
	$attributes=array('legend'=>false);
  ?>
  <div class="inlineBlock">
    <div><?php echo $this->Form->select('choice',$options,array('empty' => '-- Búsqueda Por --')); ?></div>
    <div><?php echo $this->Form->input('criteria', array('label'=> false)); ?></div>
    <div><?php echo $this->Form->end('Buscar');?></div>
  </div>
  <hr>
</div>

