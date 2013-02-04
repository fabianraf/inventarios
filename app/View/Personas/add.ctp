<h1>Ingresar Nueva Persona</h1>
<?php 
	
  echo $this->Form->create('Persona');
  
  echo $this->Form->input('Persona.tipo_de_persona', array('type' => 'select', 'options' => array(0 => "Natural", 1 => "Juridica")));
  echo $this->Form->input('Persona.primer_nombre');
  echo $this->Form->input('Persona.segundo_nombre');
  echo $this->Form->input('Persona.primer_apellido');
  echo $this->Form->input('Persona.segundo_apellido');
  echo $this->Form->input('Persona.telefono_casa');
  echo $this->Form->input('Persona.celular');
  echo $this->Form->input('Persona.direccion');
  echo $this->Form->input('Persona.email');
  echo $this->Form->input('Persona.otro', array('rows'=>'5'));
  echo $this->Form->end('Crear Persona');
?>