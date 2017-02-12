

<form action="<?php echo BASEURL;?>/cliente/Guardar" method="POST" role="form">
    <input type="hidden" name="idcliente" value="<?php echo $data->idcliente;?>">
    <label for="nombre">Nombre: </label>
   <input type="text" required name="nombre" value="<?php echo $data->nombre;?>">
    <br>
    <label for="apellidos">Apellidos: </label>
    <input type="text" required name="apellidos" value="<?php echo $data->apellidos;?>">
    <br>
    <label for="telefono">Telefono:</label>
    <input type="telefono"  name="telefono" value="<?php echo $data->telefono;?>">
    <br>
    <label for="correo">Correo:</label>
    <input type="email" name="correo" id="correo" value="<?php echo $data->correo;?>">
    <br>
    <label for="categoria_id">Categoria:</label>
    <input  name="categoria_id" id="categoria_id" value="<?php echo $data->categoria_id;?>">
    <br>
    <input type="submit" name="Guardar" value="Salvar">
</form>






