<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/login.css">

</head>
<body>
    <!-- Contenedor del Login -->
    <div id="contenido" class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            
            <div class="d-flex justify-content-center">
                <img src="../img/icons/login-icon.svg" alt="login-icon" style="height: 7rem"/>
            </div>

        <div class="text-center fs-1 fw-bold">Login</div>
        
        <!-- Input Username -->
        <div class="input-group mt-4">
            <div id="bgIcons" class="input-group-text">
                <img src="../img/icons/username-icon.svg" alt="username-icon" style="height: 1rem"/>
            </div>

            <input class="form-control bg-light" type="text" placeholder="Username"/>
        </div>

        <!-- Input Password -->
        <div class="input-group mt-1">
        <div class="input-group-text" id="bgIcons">
                <img src="../img/icons/password-icon.svg" alt="password-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light" type="password" placeholder="Password"/>
        </div>

        <div class="d-flex justify-content-around mt-1">
        <div class="d-flex align-items-center gap-1">
                <input class="form-check-input" type="checkbox" />
            <div class="pt-1" style="font-size: 0.9rem">Remember me</div>
        </div>
        <div class="pt-1">
            <a href="#" class="text-decoration-none text-#00ADEF fw-semibold fst-italic"
            style="font-size: 0.9rem">Forgot your password?</a>
        </div>
        </div>
        
        <!-- BTN Login -->
        <div id="btnLogin" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Login</div>
        
        <!-- BOTÓN PARA NADA -->
        <div id="btnLogin" class="btn btn-info text-white w-100 mt-2 fw-semibold shadow-sm">
            <a class="text-white" href="../Modulos/proyectos.html">Proyects</a>
        </div>   
        <!-- FIN BOTÓN NADA -->

        <div class="d-flex gap-1 justify-content-center mt-1">
            <div>Don't have an account?</div>
                <a href="../Modulos/registro.html" class="text-decoration-none fw-semibold">Register</a>
        </div>

        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem">
                <span class="bg-white px-3">or</span>
            </div>
        </div>

            <?php 
                $ingreso = new ControladorFormlarios();
                $ingreso->ingreso();
            ?>

        <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
            <img src="../img/icons/google-icon.svg" alt="google-icon"style="height: 1.6rem"/>
            
            <div class="fw-semibold text-secondary">
            <a href="https://www.gmail.com">Continue with Google</a>
            </div>
        </div>
      
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>    
</body>
</html>