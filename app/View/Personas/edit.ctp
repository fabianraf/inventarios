<div class="users form">
<?php echo $this->Form->create('Persona');?>
	<fieldset>
 		<legend>Editar Persona</legend>
	<?php
		echo $this->Form->input('primer_nombre');
    echo $this->Form->input('segundo_nombre');
    echo $this->Form->input('primer_apellido');
    echo $this->Form->input('segundo_apellido');
    echo $this->Form->input('telefono_casa');
    echo $this->Form->input('celular');
    echo $this->Form->input('direccion');
    echo $this->Form->input('email');
    echo $this->Form->input('otro', array('rows'=>'20'));
	?>
	</fieldset>
<?php echo $this->Form->end('Editar');?>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Personas', array('action' => 'index'));?></li>
	</ul>
</div>
