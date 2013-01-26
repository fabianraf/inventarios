<div class="users index">
	<h2>Clientes</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>Tipo de persona</th>
			<th>Nombre</th>
			<th>Email</th>
			<th class="actions">Acciones</th>
	</tr>
	<?php
	
	$i = 0;
	foreach ($Clientes as $cliente):
		//debug($cliente);
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
  //debug($cliente['Cliente']);
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cliente['Cliente']['id']; ?>&nbsp;</td>
		<td><?php echo $cliente['Persona']['tipo_de_persona_texto']; ?>&nbsp;</td>
		<td><?php 
		if($cliente['Persona']['tipo_de_persona'] == 0): //natural
			echo $cliente['Persona']['nombre_completo']; 
		else: 
			echo $cliente['Cliente']['nombre_razon_social'];
		endif;
		?>&nbsp;</td>
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
		<li><?php echo $this->Html->link('Buscar', array('action' => 'search')); ?></li>
	</ul>
</div>
