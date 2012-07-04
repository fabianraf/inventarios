<h1><?php echo $persona['Persona']['nombre_completo'];?></h1>
<?php 
debug($persona['Cliente']);
?>
<table>
  <tr>
    <td>Primer Nombre:</td>
    <td><?php echo $persona['Persona']['primer_nombre'];?></td>
  </tr>
  <tr>
    <td>Segundo Nombre:</td>
    <td><?php echo $persona['Persona']['segundo_nombre'];?></td>
  </tr>
  <tr>
    <td>Primer Apellido:</td>
    <td><?php echo $persona['Persona']['primer_apellido'];?></td>
  </tr>
  <tr>
    <td>Segundo Apellido:</td>
    <td><?php echo $persona['Persona']['segundo_apellido'];?></td>
  </tr>
  <tr>
    <td>Teléfono Casa:</td>
    <td><?php echo $persona['Persona']['telefono_casa'];?></td>
  </tr>
  <tr>
    <td>Teléfono Oficina:</td>
    <td><?php echo $persona['Persona']['telefono_oficina'];?></td>
  </tr>
  <tr>
    <td>Celular:</td>
    <td><?php echo $persona['Persona']['celular'];?></td>
  </tr>
  <tr>
    <td>Direccón:</td>
    <td><?php echo $persona['Persona']['direccion'];?></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><?php echo $persona['Persona']['email'];?></td>
  </tr>
  <tr>
    <td>Otro:</td>
    <td><?php echo $persona['Persona']['otro'];?></td>
  </tr>
  
</table>

<?php echo $this->Html->link('Añadir Persona', array('controller' => 'personas', 'action' => 'add')); ?>