<div class="users index">
	<h2>Buscar Clientes</h2>

	<?php echo $this->Form->create('Cliente', array('action'=>'index')); 
	$options=array('cedula'=>'CEDULA/RUC','name'=>'NOMBRE','razonSocial'=>'Razon Social', 'city' =>'CIUDAD', 'zone' =>'ZONA', 'especiality' =>'ESPECIALIDAD');
	$attributes=array('legend'=>false);
	echo $this->Form->radio('choice',$options,$attributes);
	echo $this->Form->input('criteria', array('label'=>'CRITERIO DE BUSQUEDA'));
	?>
	<?php echo $this->Form->end('Buscar');?>
	</li>
</div>
