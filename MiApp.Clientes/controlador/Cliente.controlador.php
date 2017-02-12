<?php
//funciones del cliente
    include_once("modelo/cliente.php");
    class clienteControlador{
        private $modelo;
       
        
        public function __CONSTRUCT(){
            $this->modelo=new cliente();
        }
        
        public function index(){
            $data=$this->modelo->listar();
            require_once("vista/encabezado.php");
            require_once("vista/cliente/index.php");
            require_once("vista/pie.php");
        }
        public function Nuevo(){
            $data= $this->modelo;
            require_once("vista/encabezado.php");
            require_once("vista/cliente/form.php");
            require_once("vista/pie.php");
            
        }
        public function Editar($idcliente){
            $data= $this->modelo->buscar($idcliente);
            //$data=$data[0];
            require_once("vista/encabezado.php");
            require_once("vista/cliente/form.php");
            require_once("vista/pie.php");
            
        }//modificar
        public function Guardar(){
            $this->modelo->idcliente=$_POST['idcliente'];
            $this->modelo->nombre=$_POST['nombre'];
            $this->modelo->apellidos=$_POST['apellidos'];
            $this->modelo->telefono=$_POST['telefono'];
            $this->modelo->correo=$_POST['correo'];
            
            $this->modelo->guardar(); 
            $data=$this->modelo->listar();
             require_once("vista/encabezado.php");
            require_once("vista/cliente/index.php");
            require_once("vista/pie.php");
         
        }
        public function Eliminar($idcliente){
         $this->modelo->Eliminar($idcliente);
            //$data=$data[0];
            $data=$this->modelo->listar();
            require_once("vista/encabezado.php");
            require_once("vista/cliente/index.php");
            require_once("vista/pie.php");
    }
    }
?>



