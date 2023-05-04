<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../styles/registro.css">
  <title>Formulario Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body class="cuerpo">
  <section id="marcoRegistro" class="form-register rounded-5 text-secondary shadow" >
    <h4 class="text-center fs-1 fw-bold">Formulario Registro</h4>
    <input class="controls input-group-text" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls input-group-text" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls input-group-text" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls input-group-text" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
    <p>Estoy de acuerdo con <a href="#" class="terminos">Terminos y Condiciones</a></p>
    
    <?php 
                
                //metodo no estatico

                //$registro = new ControladorFormlarios();
                //$registro -> Registro();

                //metodo estatico

                $Registro = ControladorFormlarios::Registro();
                if($Registro == "ok"){
                    echo '<script> 
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }

                    </script>';
                    echo '<div class="alert alert-sucess" >Usuario registrado satisfactoriamente</div>';
                }
            ?>

    <input class="botons" type="submit" value="Registrar">
    <!-- BOTÓN PARA NADA -->
    <div id="btnLogin" class="btn btn-info text-white w-100 mt-2 fw-semibold shadow-sm">
      <a class="text-white" href="../Modulos/proyectos.html">Proyects</a>
  </div>   
  <!-- FIN BOTÓN NADA -->
    <p><a href="../Modulos/login.html">¿Ya tengo Cuenta?</a></p>
  </section>

     
</body>
