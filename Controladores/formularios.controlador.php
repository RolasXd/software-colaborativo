<?php

    class ControladorFormlarios{

        /*  Formulario de Registro  */

        static public function Registro(){
            if(isset($_POST["NombreCompleto"])){
                $tabla = "username";
                $datos = array( "full_name"=>$_POST["NombreCompleto"],
                                "email"=>$_POST["email"],
                                "clave"=>$_POST["clave"],
                                "document"=>$_POST["document"]);

                $respuesta = ModeloFormularios::mRegistro($tabla, $datos);
                return $respuesta;

            }
        }

          /*  Formulario PARA MOSTRAR REGISTROS  */

          static public function mostrarRegistros(){
              $tabla = "username";
              $respuesta = ModeloFormularios::mdlseleccionarRegistro($tabla, null, null);
              return $respuesta;
          }

           /*  Formulario PARA Ingreso al sistema */

           static public function ingreso(){
            if(isset($_POST["valEmail"])){
                $tabla= "username";
                $columna= "email";
                $valor= $_POST["valEmail"];
                $respuesta = ModeloFormularios::mdlseleccionarRegistro($tabla, $columna, $valor);
                if($respuesta["email"]== $_POST["valEmail"] && $respuesta["clave"] ==$_POST["valPassword"]){
                    $_SESSION["validacion"]= "ok";
                    echo '<script>
                    if( window.history.replaceState){
                   window.history.replaceState(null, null, window.location.href);
                       }
                       window.location= "index.php?pagina=registro.usuarios";
                    </script>';
    
                } else {
                   echo '<script>
                    if( window.history.replaceState){
                   window.history.replaceState(null, null, window.location.href);
                       }
                       </script>';
                       echo '<div class="alert alert-warning">Datos erroneos o el Usuario no existe</div>';
    
                }
    
        }
        }
        
    }

?>