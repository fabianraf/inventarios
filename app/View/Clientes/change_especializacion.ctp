<label for="ClienteEspecializacionId2">Especializacion 2</label>
<select id="ClienteEspecializacionId2" name="data[Cliente][especializacion_id]">
  <?php foreach ($especializaciones as $key=>$especializacion) { ?>
  <option value="<?php echo $key; ?>"><?php echo $especializacion; ?></option>
  <?php } ?>
</select>
