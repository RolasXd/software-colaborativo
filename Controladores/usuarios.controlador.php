<?php
    require '../Modelos/Usuario.php';
    class UsuarioController extends Usuario{

        public function LoginView()
        {
            require '../Vistas/Modulos/login.php';
        }

    }

    if(isset($_GET['action'])&& $_GET['action']=='login'){
        $instanciacontrolador = new UsuarioController();
        $instanciacontrolador -> LoginView();
    }

    