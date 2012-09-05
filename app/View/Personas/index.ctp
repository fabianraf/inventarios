<div class="users index">
	<h2>Personas</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>email</th>
			<th class="actions">Acciones</th>
	</tr>
	<?php
	$i = 0;
	foreach ($Personas as $persona):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $persona['Persona']['id']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['nombre_completo']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['email']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php if ($current_user['role'] == 'admin'): ?>
			    <?php echo $this->Html->link('Edit', array('action' => 'edit', $persona['Persona']['id'])); ?>
			    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $persona['Persona']['id']), array('confirm'=>'Está seguro que desea eliminar esta persona?')); ?>
		    <?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Nueva Persona', array('action' => 'add')); ?></li>
	</ul>
</div>
