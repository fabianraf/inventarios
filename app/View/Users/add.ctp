<div class="users form">
	<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>Registrar</legend>
		<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirmation', array('type'=>'password'));
		if ($current_user['role'] == 'admin'){
			echo $this->Form->input('role', array('type' => 'select', 'options' => array('normal' =>'normal','admin'=>'admin')));
		};

		?>
	</fieldset>
	<?php echo $this->Form->end('Guardar');?>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('List Users', array('action' => 'index'));?>
		</li>
	</ul>
</div>
