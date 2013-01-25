<?php echo $this->Html->script('clientes/especializaciones'); ?>
<div class="users form">
	<?php echo $this->Form->create('Cliente', array('action'=>'add')); ?>
	<fieldset>
		<legend>Nuevo Cliente</legend>
		<?php
		echo $this->Form->input('Persona.tipo_de_persona', array('type' => 'select', 'options' => array(0 => "Natural", 1 => "Juridica")));
		?>
		<div>
			<div class="natural-bloque inlineBlock">
				<?php
				echo $this->Form->input('Persona.cedula');
				?>
			</div>
		</div>
		<div>
			<div class="juridica-bloque inlineBlock">
				<?php
				echo $this->Form->input('Persona.ruc');
				?>
			</div>
		</div>
		<div class="natural-bloque inlineBlock">
			<?php
			echo $this->Form->input('Persona.primer_nombre');
			echo $this->Form->input('Persona.segundo_nombre');
			?>
		</div>
		<div class="natural-bloque inlineBlock">

			<?php
			echo $this->Form->input('Persona.primer_apellido');
			echo $this->Form->input('Persona.segundo_apellido');
			?>
		</div>
		<?php
		echo $this->Form->input('cargo_id');
		echo $this->Form->input('nombre_razon_social', array('label' => "Empresa/Institución"));
		?>
		<div class="juridica-bloque">
			<?php
			echo $this->Form->input('representante_legal');
			?>
		</div>
		<div class="inlineBlock">

			<?php
			echo $this->Form->input('contacto_pedidos');
			echo $this->Form->input('contacto_cobros');
			?>
		</div>
		<div class="inlineBlock">
			<?php
			echo $this->Form->input('direccion_calle_principal');
			echo $this->Form->input('calle_secundaria');
			echo $this->Form->input('numeracion_nueva');
			?>
		</div>
		<div class="longInput">
			<?php
			echo $this->Form->input('referencia');
			?>
		</div>
		<?php

		echo $this->Form->input('zona_id');
		echo $this->Form->input('croquis_id');
		?>

		<div class="natural-bloque inlineBlock">
			<?php
			echo $this->Form->input('Persona.telefono_casa');
			?>
		</div>
		<div class="inlineBlock">
			<?php
			echo $this->Form->input('Persona.telefono_oficina');
			echo $this->Form->input('Persona.telefono_oficina2');
			echo $this->Form->input('Persona.celular');

			?>
		</div>
		<div class="inlineBlock">
			<?php

			echo $this->Form->input('Persona.email');
			?>
		</div>
		<?php
		echo '<div class="natural-bloque">';
		echo $this->Form->input('personasNaturales', array('label'=> "Factura a nombre de"));
		echo $this->Form->input('factura_a_nombre_de', array('rows'=>'5','label'=>''));
		echo '</div>';
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('division_id');
		echo $this->Form->input('especializacion_id');

		if ($current_user['role'] == 'admin'){
			echo $this->Form->input('credito_aprobado');
		};

		echo $this->Form->input('forma_pago');
		echo $this->Form->input('horario_atencion');
		echo '<div class="longInput">';
		echo $this->Form->input('Persona.otro', array('rows'=>'5'));
		echo '</div>';
		?>

	</fieldset>
	<?php echo $this->Form->end('Crear');?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Clientes', array('action' => 'index'));?>
		</li>
	</ul>
</div>
