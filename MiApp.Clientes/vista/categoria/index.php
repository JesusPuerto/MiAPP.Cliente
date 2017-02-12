
<table class="table table-hover">
    <caption><h2>Tabla de Categotias</h2></caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>nombre</th>  
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $obj){
        ?>
        <tr>
            <td><?php echo $obj->id;?></td>
            <td><?php echo $obj->nombre;?></td>
            <td>
                <a class="btn btn-Editar btn-success btn-sm" href="<?php echo BASEURL;?>/categoria/Editar/<?php echo $obj->id;?>" data-modelo="<?php echo BASEURL;?>/categoria" data-nombre="<?php echo $obj->nombre;?>" class="btn btn-Editar btn-success btn-sm">Editar</a>
                <a class="btn btn-Eliminar btn-success btn-sm" href="<?php echo BASEURL;?>/categoria/Eliminar/<?php echo $obj->id;?>" data-modelo="<?php echo BASEURL;?>/categoria" data-nombre="<?php echo $obj->nombre;?>" class="btn btn-Eliminar btn-success btn-sm">Eliminar</a>
               
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
            <p>El <b>-</b> con clave <em>-</em> será eliminardo permanentemente</p>
        </div>
        <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="eliminar">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
        </div>
        </div>      
    </div>
</div>