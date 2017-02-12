<?php
//controlador que llama las funciones 
    include_once("modelo/categoria.php");
    class categoriaControlador{
        private $modelo;
       
        
        public function __CONSTRUCT(){
            $this->modelo=new categoria();
        }
        
        public function index(){
            $data= $this->modelo->listar();
            require_once("vista/encabezado.php");
            require_once("vista/categoria/index.php");
            require_once("vista/pie.php");
        }
        public function Nuevo(){
            $data= $this->modelo;
            require_once("vista/encabezado.php");
            require_once("vista/categoria/form.php");
            require_once("vista/pie.php");
            
        }
        public function Editar($categoria_id){
            $data= $this->modelo->buscar($categoria_id);
            //$data=$data[0];
            require_once("vista/encabezado.php");
            require_once("vista/categoria/form.php");
            require_once("vista/pie.php");
            
        }//modificarcategoria_id
        public function Guardar(){
            $this->modelo->categoria_id=$_POST['categoria_id'];
            $this->modelo->nombre=$_POST['nombre'];
            
            $this->modelo->guardar(); 
            $data=$this->modelo->listar();
             require_once("vista/encabezado.php");
            require_once("vista/categoria/index.php");
            require_once("vista/pie.php");
         
        }
        public function Eliminar($categoria_id){
         $this->modelo->Eliminar($categoria_id);
            //$data=$data[0];
            $data=$this->modelo->listar();
            require_once("vista/encabezado.php");
            require_once("vista/categoria/index.php");
            require_once("vista/pie.php");
    }
    }
?>



