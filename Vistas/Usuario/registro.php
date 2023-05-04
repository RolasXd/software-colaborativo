<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../styles/registro.css">
  <title>Formulario Registro</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
  crossorigin="anonymous">

</head>

<body class="cuerpo">
  <form action="procesar_registro.php" method="post">

  <section id="marcoRegistro" class="form-register rounded-5 text-secondary shadow" >
  <div class="d-flex justify-content-center">
                    <img src="../img/icons/login-icon.svg" alt="login-icon" style="height: 8rem"/>
                </div>
    <h4 class="text-center fs-1 fw-bold">Formulario Registro</h4>
    <input class="controls input-group-text" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
    <input class="controls input-group-text" type="email" name="email" id="email" placeholder="Ingrese su Correo">
    <input class="controls input-group-text" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
    <p>Estoy de acuerdo con <a href="#" class="terminos">Terminos y Condiciones</a></p>
    

    <input class="botons" type="submit" value="Registrarse">
    <p><a href="http://localhost/ProyectoColaborativo/Vistas/Usuario/login.php?LoginView">¿Ya tengo Cuenta?</a></p>
  </section>
  
  </form>
  

     
</body>
