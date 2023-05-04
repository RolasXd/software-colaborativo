<?php
    class Modelo{
        private $Modelo;
        private $db;
        public function _construct(){
            $this->Modelo = array();
            $this->db = new PDO('mysql:host=localhost;dbname=sysspm', "root","");
        }
        public function insertar($tabla, $data){
            $consulta="insert into ".$tabla."values(null," .$data. ")";
            $resultado=$this->db->query($consulta);
                if ($resultado){
                    return true;
                }else{
                    return false;
                }
        }

        
    }