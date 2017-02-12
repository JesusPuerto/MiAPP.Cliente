<?php
include("database.php");
//funciones con las consulta de sql
    class categoria {
        private $pdo;
        public $nombre;
       public $categoria_id;
        
         public $row;
        
        
        public function __construct(){
            
            $this->pdo=Database::Open();
           
        }
        //funcion listar 
        public function listar(){
            try{
                $sql="select * from categorias";
                $stm=$this->pdo->prepare($sql);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
                
            } catch(Exception $e){
                die($e->getMessage());
            }
        }//Fin Listar
        public function buscar($categoria_id){
            try{
                $sql="select * from categorias where id=".$categoria_id;
                $stm=$this->pdo->prepare($sql);
                $stm->execute();
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }//Fin de buscar
        public function guardar(){
           try{
               
               if($this->categoria_id==null){
                   //Realizar un insert
                    $sql="insert into categorias (nombre) values (?)";
                    $stm=$this->pdo->prepare($sql);
                    $stm->execute(array(
                        $this->nombre
                    ));
         }else{
                   //Realizar un update
                   $sql="update categorias set nombre= where id=?";
                    $stm=$this->pdo->prepare($sql);
                    $stm->execute(array(
                        $this->nombre,
                        $this->categoria_id
                    ));
               }
                
                //return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e);
            } 
        }//Fin Guardar
         public function Eliminar($categoria_id){
        try {
            $sql ="delete from categorias WHERE id = ?";
            $stm = $this->pdo->prepare($sql);                      
            $stm->execute(array($categoria_id));
        } 
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    }






