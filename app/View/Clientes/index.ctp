<div class="users index">
	<h2>Clientes</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>email</th>
			<th class="actions">Acciones</th>
	</tr>
	<?php
	$i = 0;
	foreach ($Clientes as $cliente):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
  //debug($cliente['Cliente']);
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cliente['Cliente']['id']; ?>&nbsp;</td>
		<td><?php echo $cliente['Persona']['nombre_completo']; ?>&nbsp;</td>
		<td><?php echo $cliente['Persona']['email']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php if ($current_user['role'] == 'admin'): ?>
			    <?php echo $this->Html->link('Edit', array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $cliente['Cliente']['id']), array('confirm'=>'Está seguro que desea eliminar esta cliente?')); ?>
		    <?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Nuevo cliente', array('action' => 'add')); ?></li>
	</ul>
</div>
