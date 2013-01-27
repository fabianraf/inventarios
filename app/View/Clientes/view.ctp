<?php echo $this->render('search', 'ajax');  ?>
<div class="persona view">
	<dl>
		<?php $i = 0; $class = ' class="altRowCliente"';?>
		<div>
			<dt <?php if ($i % 2 == 0) echo $class;?>>Id</dt>
			<dd <?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $cliente['Cliente']['id']; ?>
				&nbsp;
			</dd>
		</div>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Cédula</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['cedula']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class; ?>>Tipo de Persona</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php 
			if($cliente['Persona']['tipo_de_persona'] == 0)
				echo "Persona Natural";
			else
				echo "Persona Juridica";
			?>
			&nbsp;
		</dd>
		<?php if($cliente['Persona']['tipo_de_persona'] == 0){?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Cédula</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['cedula']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Primer Nombre</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['primer_nombre']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Segundo Nombre</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['segundo_nombre']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Primer Apellido</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['primer_apellido']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Segundo Apellido</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['segundo_apellido']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Cargo</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>

			<?php echo $cliente['Cargo']['nombre']; ?>
			&nbsp;
		</dd>
		<?php } else{ ?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>RUC</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['ruc']; ?>
			&nbsp;
		</dd>

		<?php }?>

		<dt <?php if ($i % 2 == 0) echo $class;?>>Representante Legal</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['representante_legal']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Empresa/Institución</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['nombre_razon_social']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Contacto Pedidos</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['contacto_pedidos']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Contacto Cobros</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['contacto_cobros']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Ciudad</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['ciudad']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Direccion Calle Principal</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['direccion_calle_principal']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Numeracion Nueva</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['numeracion_nueva']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Calle Secundaria</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['calle_secundaria']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Referencia</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['referencia']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Zona</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Zona']['nombre']; ?>
			&nbsp;
		</dd>
		<div <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($cliente['Persona']['tipo_de_persona'] == 0){ //natural?>
			<dt>Teléfono Casa</dt>
			<dd>
				<?php echo $cliente['Persona']['telefono_casa']; ?>
				&nbsp;
			</dd>
			<?php } ?>

			<dt>Teléfono Oficina</dt>
			<dd>
				<?php echo $cliente['Persona']['telefono_oficina']; ?>
				&nbsp;
			</dd>
			<dt>Teléfono Oficina 2</dt>
			<dd>
				<?php echo $cliente['Persona']['telefono_oficina2']; ?>
				&nbsp;
			</dd>

			<dt>Celular</dt>
			<dd>
				<?php echo $cliente['Persona']['celular']; ?>
				&nbsp;
			</dd>
		</div>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Email</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['email']; ?>
			&nbsp;
		</dd>
		<?php if($cliente['Persona']['tipo_de_persona'] == 0): ?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Factura a nombre de</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['factura_a_nombre_de']; ?>
			&nbsp;
		</dd>
		<?php endif ?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Especializacion</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Especializacion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Division</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Division']['nombre']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Categoria</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Categoria']['nombre']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Credito Aprobado</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['credito_aprobado']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Forma de Pago</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['forma_pago']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Croquis</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php // echo $cliente['Cliente']['']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>H. de Atención</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['horario_atencion']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>Otro</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Persona']['otro']; ?>
			&nbsp;
		</dd>

	</dl>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<?php if ($current_user['role'] == 'admin'): ?>
		<li><?php echo $this->Html->link('Editar Cliente', array('action' => 'edit', $cliente['Cliente']['id'])); ?>
		</li>
		<li><?php echo $this->Form->postLink('Borrar Cliente', array('action' => 'delete', $cliente['Cliente']['id']), array('confirm'=>'Está seguro que desea eliminar este cliente?')); ?>
		</li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('Clientes', array('action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link('Nuevo Cliente', array('action' => 'add')); ?>
		</li>
	</ul>
</div>
