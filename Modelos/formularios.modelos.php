<?php
    
    require_once "conexion.php";
        class ModeloFormularios{
        static public function mRegistro($tabla, $datos){
            $sql = Conexion::conectar()->prepare("INSERT INTO $tabla (full_name, document, email, clave) 
            VALUES (:full_name, :document, :email, :clave)");

            $sql ->bindParam(":full_name", $datos["full_name"], PDO:: PARAM_STR);
            $sql ->bindParam(":email", $datos["email"], PDO:: PARAM_STR); 
            $sql ->bindParam(":clave", $datos["clave"], PDO:: PARAM_STR); 
            $sql ->bindParam(":document", $datos["document"], PDO:: PARAM_STR); 
            //$sql ->bindParam(":state", $datos["state"], PDO:: PARAM_STR); 

            if($sql->execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }

            //$sql->close;
            $sql = null;   
        }
    
 
        /* MOSTRAR REGISTROS*/

        static public function mdlseleccionarRegistro($tabla, $columna, $valor){

            if($columna == null && $valor == null){
                $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
                $sql -> execute();
                return $sql -> fetchAll();
            }else{
                $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
                $sql->bindParam(":".$columna, $valor, PDO::PARAM_STR);
                $sql -> execute();
                return $sql -> fetch();
            }
  
        }

    }
?>