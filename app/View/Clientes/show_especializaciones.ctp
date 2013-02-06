  <select id="ClienteEspecializacionId" name="data[Cliente][criteria]">
    <?php foreach ($especializaciones as $key=>$especializacion) { ?>
      <option value="<?php echo $key; ?>"><?php echo $especializacion; ?></option>
    <?php } ?>
  </select>