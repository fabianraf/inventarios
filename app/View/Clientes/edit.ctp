<div class="users form">
<?php echo $this->Form->create('Cliente', array('action'=>'add'));?>
	<fieldset>
 		<legend>Edit User</legend>
	<?php
		echo $this->Form->input('nombre_razon_social');
		echo $this->Form->input('especializacion');
		echo $this->Form->input('contacto');
		echo $this->Form->input('horario_atencion');
    echo $this->Form->input('Persona.primer_nombre');
    echo $this->Form->input('Persona.segundo_nombre');
    echo $this->Form->input('Persona.primer_apellido');
    echo $this->Form->input('Persona.segundo_apellido');
    echo $this->Form->input('Persona.telefono_casa');
    echo $this->Form->input('Persona.celular');
    echo $this->Form->input('Persona.direccion');
    echo $this->Form->input('Persona.email');
    echo $this->Form->input('Persona.otro', array('rows'=>'20'));
	?>
	</fieldset>
<?php echo $this->Form->end('Editar');?>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Clientes', array('action' => 'index'));?></li>
	</ul>
</div>
