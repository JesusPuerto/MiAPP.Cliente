
<form action="<?php echo BASEURL;?>/categoria/Guardar" method="POST" role="form">
    <input type="hidden" name="categoria_id" value="<?php echo $data->categoria_id;?>">
    <label for="nombre">Nombre: </label>
   <input type="text" name="nombre" value="<?php echo $data->nombre;?>">
    <br>
    <input type="submit" name="Guardar" value="Salvar">
</form>






