
<table class="table table-hover">
    <caption><h2>Tabla de Clientes</h2></caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>telefono</th>
            <th>correo</th>
            <th>categoria_id</th>           
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $obj){
        ?>
        <tr>
            <td><?php echo $obj->idcliente;?></td>
            <td><?php echo $obj->nombre;?></td>
            <td><?php echo $obj->apellidos;?></td>
            <td><?php echo $obj->telefono;?></td>            
            <td><?php echo $obj->correo;?></td>
            <td><?php echo $obj->categoria_id;?></td>
            <td>
                <a class="btn btn-Editar btn-success btn-sm" href="<?php echo BASEURL;?>/cliente/Editar/<?php echo $obj->idcliente;?>" data-modelo="<?php echo BASEURL;?>/cliente" data-nombre="<?php echo $obj->nombre;?>" class="btn btn-Editar btn-success btn-sm">Editar</a>
                <a class="btn btn-Eliminar btn-success btn-sm" href="<?php echo BASEURL;?>/cliente/Eliminar/<?php echo $obj->idcliente;?>" data-modelo="<?php echo BASEURL;?>/cliente" data-nombre="<?php echo $obj->nombre;?>" class="btn btn-Eliminar btn-success btn-sm">Eliminar</a>
               
            </td>
        </tr>    
        <?php
        }
        ?>
    </tbody>

</table>
<div class="modal fade" id="msgDelete" role="dialog">
    <div class="modal-dialog">
        <!modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times</button>
        <h4 class="modal-title">¿Desea elminar la informacion?</h4>
        </div>
        <div class="modal-body">
            <p>El <b></b> con clave <em>-</em> será eliminardo permanentemente</p>
        </div>
        <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="eliminar">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
        </div>
        </div>      
    </div>
</div>