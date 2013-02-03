<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend>Edit User</legend>
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
<?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('List Users', array('action' => 'index'));?></li>
	</ul>
</div>
