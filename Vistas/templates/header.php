<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaborative Projects</title>
    <link rel="stylesheet" href="/Vistas/styles/inicio.css">
</head>

<body>
    <!-- Inicio Navbar -->
    <link rel="stylesheet" href="/Vistas/layouts/inicio.css">
    <header>
        <div class="interior">
            <a href="" class="logoNav"><img src="/img/icon.png" alt=""></a>
            <nav class="navegacion">
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Acerca de</a></li>
                    <li class="submenu">
                        <a href="">Productos</a>
                        <ul class="hijos">
                            <li><a href="">Item1</a></li>
                            <li><a href="">Item2</a></li>
                            <li><a href="">Item3</a></li>
                            <li><a href="">Item4</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="http://localhost/ProyectoColaborativo/Vistas/Usuario/login.php">Login</a></li>
                    <li><a href="http://localhost/ProyectoColaborativo/Vistas/Usuario/registro.php">Registro</a></li>                    
                </ul>
            </nav>
        </div>
    </header>
    <!-- Fin Navbar -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Open Sans', sans-serif;
        }

        header {
            width: 100%;
            height: 90px;
            background-image: linear-gradient(#0087ef, #6ad3fd);
        }

        .interior {
            max-width: 100%;
            padding: 0 10px;
            margin: auto;
        }

        .logo {
            float: left;
            padding: 5px 20px 0;
        }

        .logoNav img {
            height: 80px;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        .navegacion {
            float: right;
            display: flex;
            align-items: center;
            min-height: 90px;
            z-index: 1000;
        }

        .navegacion ul {
            list-style: none;
            padding: 0 10px;
        }

        .navegacion ul li {
            display: inline-block;
            position: relative;
            transition: .3s linear;
            z-index: 1000;
        }

        .navegacion ul li:hover {
            transform: scale(1.1);
        }

        .navegacion ul li a {
            color: #ffff;
            text-align: center;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            padding: 12px 20px;
            transition: .3s linear;
        }

        .navegacion ul li a:hover {
            color: #0544B9;
            transform: scale(1.1);
        }

        .navegacion ul li:hover .hijos {
            display: block;
        }

        .navegacion .submenu .hijos {
            display: none;
            background: #0b132b;
            position: absolute;
            width: 100%;
        }

        .navegacion .submenu .hijos li {
            display: block;
            overflow: hidden;
            border-bottom: none;
        }

        .navegacion .submenu .hijos li a {
            display: block;
        }
    </style>