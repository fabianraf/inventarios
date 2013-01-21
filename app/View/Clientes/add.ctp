<?php echo $this->Html->script('clientes/especializaciones'); ?>
<div class="users form">
<?php echo $this->Form->create('Cliente', array('action'=>'add')); ?>
	<fieldset>
 		<legend>Nuevo Cliente</legend>
  <?php
    echo $this->Form->input('Persona.tipo_de_persona', array('type' => 'select', 'options' => array(0 => "Natural", 1 => "Juridica")));
  ?>
  <?php
    echo $this->Form->input('Persona.cedula');
  ?>
  
  <div class="natural-bloque">
    <?php
  	echo $this->Form->input('Persona.primer_nombre');
    echo $this->Form->input('Persona.segundo_nombre');
    echo $this->Form->input('Persona.primer_apellido');
    echo $this->Form->input('Persona.segundo_apellido');
	  ?>
  </div>    
  <?php
    echo $this->Form->input('cargo_id');
  ?>
  <div class="juridica-bloque">
    <?php
      echo $this->Form->input('representante_legal');
    ?>
  </div>
  <?php
    echo $this->Form->input('nombre_razon_social');
    echo $this->Form->input('contacto_pedidos');
		echo $this->Form->input('contacto_cobros');
		echo $this->Form->input('direccion_calle_principal');
		echo $this->Form->input('numeracion_nueva');
		echo $this->Form->input('calle_secundaria');
		echo $this->Form->input('referencia');
		echo $this->Form->input('zona_id');
		echo '<div class="natural-bloque">';
			echo $this->Form->input('Persona.telefono_casa');
		echo '</div>';
    echo $this->Form->input('Persona.telefono_oficina');
    echo $this->Form->input('Persona.telefono_oficina2');
    echo $this->Form->input('Persona.celular');
    echo $this->Form->input('Persona.email');
    echo '<div class="natural-bloque">';
    	echo $this->Form->input('factura_a_nombre_de');
    echo '</div>';
		echo $this->Form->input('especializacion_id');
		echo $this->Form->input('division_id');
		echo $this->Form->input('categoria_id');
		if ($current_user['role'] == 'admin'):
			echo $this->Form->input('credito_aprobado');
		endif;
		echo $this->Form->input('forma_pago');
		echo $this->Form->input('croquis_id');
    echo $this->Form->input('horario_atencion');
		echo $this->Form->input('Persona.otro', array('rows'=>'20'));
  ?>
  
	</fieldset>
<?php echo $this->Form->end('Crear');?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Clientes', array('action' => 'index'));?></li>
	</ul>
</div>
