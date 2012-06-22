<?php echo $this->Html->link('Añadir Persona', array('controller' => 'personas', 'action' => 'add')); ?>
<table>
  <tr>
    <th>Nombre</th>
    <th>Email</th>
    <th width="110" class="ac">Content Control</th>
  </tr>
  <?php foreach($Personas as $persona){ ?>
    <tr>
      <td><?php echo $persona['Persona']['nombre_completo']; ?></td>
      <td><?php echo $persona['Persona']['email']; ?></td>
      <td>
        <?php echo $this->Html->link('Editar', array('action' => 'edit', $persona['Persona']['id'])); ?>
        <?php echo $this->Html->link('Borrar', 'Link URL'); ?>
      </td>
    </tr>
  <?php }?>
</table>