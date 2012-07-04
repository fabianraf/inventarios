<?php echo $this->Html->link('Añadir Cliente', array('controller' => 'clientes', 'action' => 'add')); ?>
<pre>
  <?php print_r($Clientes); ?>
</pre>
<table>
  <tr>
    <th>Nombre</th>
    <th>Email</th>
    <th width="110" class="ac">Acciones</th>
  </tr>
  <?php foreach($Clientes as $cliente){ ?>
    <tr>
      <td><?php// echo $cliente['Cliente']['nombre_completo']; ?></td>
      <td><?php// echo $cliente['Cliente']['email']; ?></td>
      <td>
        <?php// echo $this->Html->link('Editar', array('action' => 'edit', $persona['Persona']['id'])); ?>
        <?php// echo $this->Form->postLink('Eliminar', array('action' => 'delete', $persona['Persona']['id']), array('confirm' => 'Está seguro?'));?>
      </td>
    </tr>
  <?php }?>
</table>