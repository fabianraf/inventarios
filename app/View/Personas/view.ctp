<div class="persona view">
<h2>Persona</h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Id</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Primer Nombre</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['primer_nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Segundo Nombre</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['segundo_nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Primer Apellido</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['primer_apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Segundo Apellido</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['segundo_apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Teléfono Casa</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['telefono_casa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Teléfono Oficina</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['telefono_oficina']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Celular</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['celular']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Email</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Otro</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $persona['Persona']['otro']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
	    <?php if ($current_user['role'] == 'admin'): ?>
		    <li><?php echo $this->Html->link('Editar Persona', array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		    <li><?php echo $this->Form->postLink('Borrar Persona', array('action' => 'delete', $persona['Persona']['id']), array('confirm'=>'Está seguro que desea eliminar esta persona?')); ?> </li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('Personas', array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('Nueva Persona', array('action' => 'add')); ?> </li>
	</ul>
</div>
