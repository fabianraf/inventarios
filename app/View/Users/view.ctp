<div class="users view">
<h2>User</h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
    <dt<?php if ($i % 2 == 0) echo $class;?>>Nombre de usuario</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Email</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>Rol</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['role']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
	    <?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
		    <li><?php echo $this->Html->link('Edit User', array('action' => 'edit', $user['User']['id'])); ?> </li>
		    <li><?php echo $this->Form->postLink('Delete User', array('action' => 'delete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?> </li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('List Users', array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New User', array('action' => 'add')); ?> </li>
	</ul>
</div>
