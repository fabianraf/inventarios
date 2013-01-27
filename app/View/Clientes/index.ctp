<?php echo $this->render('search', 'ajax');  ?>
<div class="users index">
	<div class="right">
    <?php echo $this->Paginator->prev(' << ', array(), null, array('class' => 'prev disabled', 'style' => "display:none;")); ?>
    <?php echo $this->Paginator->numbers(); ?>
    <?php echo $this->Paginator->next(' >> ', array(), null, array('class' => 'next disabled', 'style' => "display:none;")); ?>
  </div>
  <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Cliente.id','Id'); ?></th>  
			<th><?php echo $this->Paginator->sort('Persona.tipo_de_persona','Tipo de Persona'); ?></th>
			<th><?php echo $this->Paginator->sort('Persona.primer_apellido','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Persona.email','Email'); ?></th>
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
  <div class="right">
    <?php echo $this->Paginator->prev(' << ', array(), null, array('class' => 'prev disabled', 'style' => "display:none;")); ?>
    <?php echo $this->Paginator->numbers(); ?>
    <?php echo $this->Paginator->next(' >> ', array(), null, array('class' => 'next disabled', 'style' => "display:none;")); ?>
  </div>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Nuevo cliente', array('action' => 'add')); ?></li>
	</ul>
</div>
