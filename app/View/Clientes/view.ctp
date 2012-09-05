<div class="persona view">
<h2>Cliente</h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Id</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Primer Nombre</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['primer_nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Segundo Nombre</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['segundo_nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Primer Apellido</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['primer_apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Segundo Apellido</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['segundo_apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Teléfono Casa</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['telefono_casa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Teléfono Oficina</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['telefono_oficina']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Celular</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['celular']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Email</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Otro</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['otro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Razón Social</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['nombre_razon_social']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Especializacion</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['especializacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Credito Aprobado</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['credito_aprobado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Forma de Pago</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['forma_pago']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>H. de Atención</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['horario_atencion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
	    <?php if ($current_user['role'] == 'admin'): ?>
		    <li><?php echo $this->Html->link('Editar Cliente', array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		    <li><?php echo $this->Form->postLink('Borrar Cliente', array('action' => 'delete', $cliente['Cliente']['id']), array('confirm'=>'Está seguro que desea eliminar este cliente?')); ?> </li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('Clientes', array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('Nuevo Cliente', array('action' => 'add')); ?> </li>
	</ul>
</div>
