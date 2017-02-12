<?php
include("database.php");
    class cliente {
        //datos del cliente
        private $pdo;
        public $nombre;
        public $apellidos;
        public $telefono;
        public $correo;
       public $idcliente;
       public $categoria_id;
        
         public $row;
        
        
        public function __construct(){
            
            $this->pdo=Database::Open();
           
        }
        //funciones del cliente con las consultas sql
        public function listar(){
            try{
                $sql="select * from clientes ";
                $stm=$this->pdo->prepare($sql);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
                
            } catch(Exception $e){
                die($e->getMessage());
            }
        }//Fin Listar
        public function buscar($idcliente){
            try{
                $sql="select * from clientes where idcliente=".$idcliente;
                $stm=$this->pdo->prepare($sql);
                $stm->execute();
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }//Fin de buscar
        public function guardar(){
           try{
               
               if($this->idcliente==null){
                   //Realizar un insert
                    $sql="insert into clientes(nombre,apellidos,telefono,correo,categoria_id) values (?,?,?,?,?)";
                    $stm=$this->pdo->prepare($sql);
                    $stm->execute(array(
                        $this->nombre,
                        $this->apellidos,
                        $this->telefono,
                        $this->correo,
                        $this->categoria_id,

                    ));
         }else{
                   //Realizar un update
                   $sql="update clientes set nombre=?,apellidos=?,telefono=?,correo=?,categoria_id=?
                   where idcliente=?";
                    $stm=$this->pdo->prepare($sql);
                    $stm->execute(array(
                        $this->nombre,
                        $this->apellidos,
                        $this->telefono,
                        $this->correo,      
                        $this->idcliente,
                        $this->categoria_id
                    ));
               }
                
                //return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e);
            } 
        }//Fin Guardar
         public function Eliminar($idcliente){
        try {
            $sql ="delete from clientes WHERE idcliente = ?";
            $stm = $this->pdo->prepare($sql);                      
            $stm->execute(array($idcliente));
        } 
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    }






